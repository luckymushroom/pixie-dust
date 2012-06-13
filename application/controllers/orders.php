<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Copyright (c) 2012 MFarm LTD.
 * All rights reserved.
 *
 * @package     Orders HTTP POST Controller
 * @author      isaak mogetutu <imogetutu@gmail.com>
 * @copyright   2012 MFarm LTD.
 * @license     http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link        http://mfarm.co.ke
 * @version     @@PACKAGE_VERSION@@
 */
class Orders extends MY_Controller
{
	protected $models = array('order','order_detail','post','user','outgoing_text');
	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->mobile_number = preg_replace('/-/', '', $this->user->get($this->current_user)->phone);
	}

	// List all your items
	/**
	 * List all orders
	 * @param  int $offset paging
	 * @return result array for users orders
	 */
	public function index( $offset = 0 )
	{
		// Load current session user's orders
		$this->data['orders'] = $this->order->my_orders()->deleted()->get_all();
	}

	public function bids()
	{
		// Get the posts id(s) by current user
		$post_ids = self::post_ids();
		$this->data['bids'] = $this->order_detail->my_bids($post_ids)->deleted()->order_by('date_modified')->get_all();
	}

	public function post_ids()
	{
		$posts = $this->post->my_posts($this->current_user)->deleted()->get_all();
		foreach ($posts as $post) 
		{
			$post_ids[] = $post->id;
		}
		return $post_ids;
	}

	public function order_details($order_id)
	{
		$this->data['details'] = $this->order_detail->deleted()->get_many_by('order_id',$order_id);
	}

	// Add a new item
	public function add()
	{
		$post_id = $this->input->post('post_id');
		// Validate quantity available
		if($post_id)
		{
			$order_id = self::get_order_id();
			// Get post details
			$post = self::post_details($post_id);
			$_POST['price'] = $post->unit_price;
			$_POST['units'] = $post->units;
			$_POST['order_id'] = $order_id;
			$add_order = $this->order_detail->insert($this->input->post());
			// Send notification to user
			self::send_notification($settings,$this->input->post());
			$this->session->set_flashdata('message','Item has been added to your Order.');
			redirect('orders/order_details/'.$order_id, 'refresh');
		}
		else
		{
			$this->session->set_flashdata('message','Opps Something went wrong. Try Again.');
			redirect('marketplace');
		}

	}

	//Update one item
	public function update($id)
	{
		$update_order = $this->order->update($id, $this->input->post());
	}

	//Delete one item
	public function delete($id)
	{
		$remove_order = $this->order->update($id, array('deleted'=>1));
	}

	public function delete_order_details($id,$order_number)
	{
		$remove_order_detail = $this->order_detail->update($id, array('deleted'=>1));
		if ($remove_order_detail)
		{
			$this->session->set_flashdata('message','Yes Mkulima, Order Item has been Removed!');
			redirect('/orders/order_details/'.$order_number, 'refresh');
		}
	}
	/**
	 * Create new order id
	 * @author mogetuut <imogetutu@gmail.com>
	 * @access public
	 * @return int order id
	 */
	public function create_order()
	{
		$data = array(
			'user_id' => $this->current_user,
			'order_date' => date('Y-m-d H:i:s')
			);
		$this->order->insert($data);
		return $this->db->insert_id();
	}
	/**
	 * Get order id if it exists
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @return int order id
	 */
	public function get_order_id()
	{
		// get unprocess order id
		$id = $this->order->get_order_id($this->current_user);
		if(!$id)
		{
			// Create new order id if non exists
			 return self::create_order();
		}
		return $id;
	}
	/**
	 * get post details for set post _id
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @param  int $post_id post_id
	 * @return array of post _item
	 */
	public function post_details($post_id)
	{
		return $this->post->get_by('posts.id',$post_id);
	}
	/**
	 * Split incoming message if more than 160 characters and send.
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @param string $text
	 * @return 
	 */
	public function split_message($text='')
	{
		$this->view = false;
		// Breakdown text into arrays and loop
		$texts = str_split($text,160);
		for ($i=0; $i <= (sizeof($texts)-1); $i++) 
		{ 
			self::send_sms_notification($texts[$i]);
		}	
	}

	/**
	 * Encode text for sending over Shujaa Server
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @param  string $text message to be sent
	 * @return string status Message from shujaa
	 * @link http://sms.shujaa.mobi
	 */
	public function send_sms_notification($text)
	{
		$network = 'Safaricom Bulk';
		$network = ($network == 'Safaricom Bulk' || $network == 'Safaricom Short Code') ? 'safaricom' : 'airtel' ;

		// Start session (also wipes existing/previous sessions)
		$this->curl->create(TARGET_URL);

		// Options
		$this->curl->options(array(CURLOPT_BUFFERSIZE => 10, CURLOPT_POST => true));

		// Login to HTTP user authentication
		$this->curl->http_login(SMS_USER, SMS_PASS);

		// Post - If you do not use post, it will just run a GET request
		$post = array(
			'username'    => SMS_USER,
			'password'    => SMS_PASS,
			'account'     =>'live',
			'source'      => 3555,
			'destination' => $this->mobile_number,
			'message'     => $text,
			'network'     => $network
			);
		// Save Outgoing text
		self::save_outgoing_sms($post);

		$this->curl->post($post);
		// Execute - returns response
		echo $this->curl->execute(); exit;
	}

	/**
	 * Save outgoing messages
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @param array outgoing_text outgoing message
	 */
	private function save_outgoing_sms($post)
	{
		$save = array(
			'destination' => element('destination',$post),
			'message'     => element('message',$post),
			'network'     => element('network', $post)
			);
		$this->outgoing_text->insert($save);
	}

	public function sms_order_template($order_details_id = 1,$event='')
	{
		$this->view = FALSE;
		$order_details = $this->order_details->get($order_detail_id);
		// $order_no,$product_name,$amount,$date_created,unit_price,$unit_weight
		$sms_template = 'Your order #{$order_details->number} of {$order_details->product_name}, 
		weight: {$order_details->unit_weight}, for {$order_details->unit_price} has been successfully {$event}';
		echo strlen($sms_template);
	}

}

/* End of file orders.php */
/* Location: ./application/controllers/orders.php */