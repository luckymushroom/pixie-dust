<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Mfarm Alerts Class
 *
 * Work with remote servers via cURL much easier than using the native PHP bindings.
 *
 * @package        	CodeIgniter
 * @subpackage    	Libraries
 * @category    	Libraries
 * @author        	Isaak Mogetutu <imogetutu@gmail.com>
 * @link			http://www.mfarm.co.ke
 */
class Alerts {

	protected $_ci;                 // CodeIgniter instance
	protected $email_response = '';       // Contains the Alert message for debug
	protected $text_message = '';             // Contains the Text message for a debug


	public function __construct()
	{
	  	$this->_ci = & get_instance();
	  	log_message('debug', 'Alerts Class Initialized');
	}

	public function event($type, $settings)
	{
		# code...
		if($settings)
		{
			self::send_.$type($message);
		}
		else
		{
			self::
		}
	}

