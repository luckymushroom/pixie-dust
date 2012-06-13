<?php if (! defined('BASEPATH')) exit('No direct script access');
/**
 * Copyright (c) 2012 MFARM LTD.
 * All rights reserved.
 *
 *
 * @package     M-Farm Web Application
 * @subpackage  SMS Module
 * @author      mogetutu <imogetutu@gmail.com>
 * @copyright   2012 MFARM LTD.
 * @link        http://mfarm.co.ke
 * @version     1.0
 */
class SMS extends MY_Controller {

	/**
	 * var sms message
	 */
	protected $message;

	/**
	 * var sender
	 */
	protected $mobile_number;

	/**
	 * var message_date_time
	 */
	protected $message_date_time;

	/**
	 * Default SMS to users
	 */
	protected $default_message = 'Welcome to Mfarm SMS system: #KEYWORDS are #PRICE #BUY #SELL #JOIN';

	/**
	 * Sending Network ID
	 */
	protected $network;

	/**
	 * Load models here
	 */
	protected $models = array('outgoing_text','incoming_text','price','user','location','product');

	//php 5 constructor
	function __construct()
	{
		parent::__construct();
		$this->mobile_number = $this->input->post('source', TRUE);
		$this->message = $this->input->post('message', TRUE);
		$this->network = $this->input->post('network', TRUE);
		$message_date_time = now();
		$this->date = date('Y-m-d');
		$this->load->model('sms_model','sms');
	}

	/**
	 * Grab Message and run through Keyword actions
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @return message back to the user with info
	 */
	public function index()
	{
		$this->view = false;
		$post = array(
			'number'  => $this->mobile_number,
			'message' => $this->message,
			'network' => $this->network
			);
		self::save_incoming_sms($post);

		// Check for number, keywords in message
		if((isset($this->mobile_number)) && (isset($this->message)))
		{
			// Explode message to get keywords sepator is space
			$exploded_message = explode(' ', $this->message);
			$keyword = strtolower($exploded_message[0]);
			switch ($keyword) {
				case 'price':
					self::price_sms($this->message);
					break;
				case 'join':
					self::subscribe_sms($this->message);
					break;
				case 'sell':
					self::sell_sms($this->message);
					break;
				case 'buy':
					self::buy_sms($this->message);
					break;
				case 'aggregate':
					self::aggregate_sms($this->message);
				default:
					$this->default_sms($this->message);
					break;
			}
		}
	}

	/**
	 * Save incoming messages
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @param array incoming_text incoming message
	 */
	public function save_incoming_sms($post)
	{
		$this->incoming_text->insert($post);
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

	/**
	 * Send Price info based on the query crop and location
	 * @access public
	 * @author mogetutu <imogetutu@gmail.com>
	 * @param  string $message price sms #PRICE MAIZE NAIROBI
	 * @return string crop locaiton weight and price of commodity queried
	 */
	public function price_sms($message)
	{
		$split_message = explode(' ', $message);    #Assuming separator is ' ' - $message = Split message
		// Keyword, crop and location
		$keyword = $split_message[0];
		$crop = $this->sms_strip_crop($message);
		$location = end($split_message);
		# select action based on input,
		if(strtoupper($keyword) == 'PRICE') #for checking price e.g PRICE#tomato#nairobi
		{
			if($crop == '' OR $location == '')
			{
				$reply = $this->lang->line('error_message_price');
			}
			else
			{
				if($crop && $location)
				{
					// Save price info into price table
					// $this->db->insert('prices', array('crop'=>$crop,'location'=>$location,'date'=>$this->date));
					$rows = $this->sms->get_crop_details($crop,$location);
					if($rows)
					{
						foreach($rows as $row)
						{
							$reply = "{$row->product_name} Kshs {$row->crop_price} per {$row->crop_weight} {$row->crop_unit} on {$this->date} in {$row->location}. powered by samsung.";
						}
					}
					else
					{
						$reply = $this->lang->line('error_message_price');
					}

				}
				else
				{
					$reply = $this->lang->line('error_message_price');
				}
			}
		}
		else
		{
			$reply = $this->lang->line('error_message_price');			
		}
		$post = array('destination'=>$this->mobile_number,'message'=>$reply,'network'=>$this->network);
		self::save_outgoing_sms($post);
		self::send_sms( $reply );
	}

	
	/**
	 * Send reply to person sending in A crop for sale
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @param  string $message sell sms $SELL MAIZE 100Kgs 3200
	 * @return string reply to user about selling on mfarm
	 */
	public function sell_sms($message)
	{
		//split message sell maize 200kgs 2000 EAG
		$params = count(explode(' ', $message));
		$keyword = $params[0];
		if($params == 5)
		{
			list($keyword, $crop, $weight, $price, $groupcode) = explode(' ', $message);	
		}
		elseif($params == 4)
		{
			list($keyword, $crop, $weight, $price) = explode(' ', $message);
			$groupcode = '';
		}
		
		if(strtoupper($keyword) == 'SELL') #for checking price e.g SELL#tomato#200kgs#2000#groupcode
		{
			//get user details from subscriebrs list
			$subscriber = $this->sms->get_subscriber_details($this->mobile_number);
			if($subscriber == false)
			{
				$reply = $this->lang->line('error_message_subscribe');
			}
			else
			{
				$user_id = $subscriber->id; //select subscribers id
				//get crop and location details from user defined
				$product_id = $this->sms->get_product_id($crop)->id;
				if(strtoupper($keyword) == 'SELL')
				{
					if($crop =='' OR $weight =='' OR $price =='')
					{
						$reply = $this->lang->line('error_message_sell');
					}
					else
					{
						$units    = preg_replace('#[^a-z]#','',$weight);
						$quantity = preg_replace('#[^0-9]#','',$weight);
						$currency = preg_replace('#[^a-z]#','',$price);
						$price    = preg_replace('#[^0-9]#','',$price);
						//sellers details data array
						$data = array(
							'user_id'        => $user_id,
							'product_id'     => $product_id,
							'product_weight' => $quantity,
							'units'          => $units,
							'unit_price'     => $price,
							'currency'       => strtoupper($currency),
							'date_added'     => date('Y-m-d H:i:s')
						);
						$reponse = $this->sms->add_post($data);
						//update incomingsms table
						if ($reponse) 
						{
							$reply = $this->lang->line('success_sell_message');
						}
					}
				}
			}
			$post = array('destination'=>$this->mobile_number,'message'=>$reply,'network'=>$this->network);
			self::save_outgoing_sms($post);
			self::send_sms( $reply );

		}
		
	}

	/**
	 * Send buying text to user
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @param  string $message buying sms #BUY MAIZE 100Kgs
	 * @return string reply with availablity of maize in the system
	 */
	public function buy_sms($message)
	{
		list($keyword,$item,$quantity,$groupcode) = explode(" ", $message." ");    #Assuming separator is ' '
		if(strtoupper($keyword) == "BUY") #syntax for buying e.g BUY#tomato#quantity#EAG
		{
			//get user details from subscribers list
			$subscriber = $this->sms->get_subscriber_details($this->mno);
			$sub_id = $subscriber->sub_id;
			$location = $subscriber->location;
			if ($subscriber == FALSE)
			{
				$reply = $this->lang->line('error_message_subscribe');
			}
			else
			{
				if($item == '' OR $quantity == '')
				{
					echo "keyword correct. item and quantity empty. MFARM LTD";
				}

				else
				{
					$data = array(
						'sub_id'       => $sub_id,
						'buy_product'  => $item,
						'buy_mno'      => $this->mno,
						'buy_quantity' => $quantity,
						'buy_location' => $location,
						'date'         => $this->date,
						'group_code'   => 0
						);
						$response = $this->sms->insert_buy_details($data);
						if ($response)
						{
							$reply = $this->lang->line('success_buy_message');
						}
				}
			}
		}
		$post = array('destination'=>$this->mobile_number,'message'=>$reply,'network'=>$this->network);
		self::save_outgoing_sms($post);
		self::send_sms($reply);
	}

	/**
	 * Subscription SMS for mfarm accounts
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @param  string $message subscription sms #JOIN isaak mogetutu nairobi
	 * @return string feedback on account creation
	 */
	public function subscribe_sms($message)
	{
		// Get Phone number and generate email and password
		$phone    = $this->mobile_number;
		$email    = "{$phone}-at-mfarm.co.ke";
		$password = self::_pass();
		// Check if user exists
		$account_exists = self::_check_account($email);
		if($account_exists)
		{
			$reply = "You account is already active. Your username/email is {$email}.Sign in at www.mfarm.co.ke. Powered by Samsung.";
		}
		else
		{
			$params = explode(' ', $message);
			if(count($params) == 4)
			{
				// Create a default user account for a farmer
				list($keyword, $firstname, $lastname, $location) = explode(' ', $message);
				$username  = "{$firstname} {$lastname}";
				$additional_data = array('first_name'=>$firstname,'last_name'=>$lastname,'group'=>2,'phone'=>$phone);
				$registration = $this->ion_auth->register($username, $password, $email, $additional_data);
			}
			$reply = "Thank you for Joining Mfarm. Your username is {$email} and password: {$password}. Powered by Samsung.";
		}
		$post = array('destination'=>$this->mobile_number,'message'=>$reply,'network'=>$this->network);
		self::save_outgoing_sms($post);
		self::send_sms($reply);
	}
	/**
	 * Aggregation SMS for crops
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @param  string $message
	 * @return string aggregation feedback
	 */
	public function aggregate_sms($message)
	{
		# code...
		$text = 'Aggregation functions will go here';
		self::send_sms($text);
	}

	public function default_sms($message)
	{
		$text = 'To join send: join firstname secondname location. To check price send: price crop location. To sell produce send:sell crop quantity price. Call 0707933993 for more.';
		self::send_sms($text);
	}
	/**
	 * Encode text for sending over Shujaa Server
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @param  string $text message to be sent
	 * @return string status Message from shujaa
	 * @link http://sms.shujaa.mobi
	 */
	public function send_sms($text)
	{
		$network = $this->network;
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
	 * SMS TESTING FORM
	 * @return void
	 */
	public function test_sms() { }

	/**
	 * Generate random user password
	 * @return string users password
	 */
	private function _pass()
	{
		return strtolower(substr(str_shuffle(str_repeat('ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz0123456789',5)),0,5));
	}

	/**
	 * check is user account exists
	 * @param  string $email autogenerated email
	 * @return boolean
	 */
	private function _check_account($email)
	{
		$check_account = $this->user->get_by('email',$email);
		return $check_account;
	}

	/**
	 * Returns the middle part of the message
	 * @param string $message SMS from sender
	 * @return string(crop)
	 */
	public function sms_strip_crop($message)
	{
		// Get items in message
		$item = explode(' ',$message);
		// First item in array
		$pattern[] = '/'.$item[0].'/';
		// Last item in array
		$pattern[] = '/'.end($item).'/';

		$output = preg_replace($pattern,'',$message);
		// Check if the there is a space between the middle elements of the string
		if (preg_match('/[^a-zA-Z0-9]+$/i', $output))
		{
			// Remove spaces
			$output = str_replace(' ', '', $output);
			$output = str_replace('-', '', $output);
			$output = str_replace('_', '', $output);
		}

		return $output;
	}
}