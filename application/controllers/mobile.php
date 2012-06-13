<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile extends MY_Controller {

	protected $models = array('users','products');
	public function __construct()
	{
		parent::__construct();
		$this->layout ='layouts/mobile';
	}

	/**
	 * Login Screen
	 */
	public function index()
	{
		
	}
	/**
	 * List All crop Alphabetically
	 */
	public function product_list()
	{
		
	}
	/**
	 * Post prices to server
	 */
	public function post()
	{
		# code...
	}

}

/* End of file mobile.php */
/* Location: ./application/controllers/mobile.php */