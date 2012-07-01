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
	protected $models = array('order','order_detail','post','user');
	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		// Check is bugger is logged
		$this->ion_auth->logged_in_check();
		$seller = 'layouts/seller_template';
		$admin = 'layouts/admin_template';
		$this->layout = ($this->ion_auth->in_group('admin')) ? $admin : $seller ;
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
		if(! empty($post_ids))
			return $post_ids;
		else
			return NULL;
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

}

/* End of file orders.php */
/* Location: ./application/controllers/orders.php */