<?php if (! defined('BASEPATH')) exit('No direct script access');

class Marketplace extends MY_Controller
{
	protected $models = array('post','order','order_detail');
	//php 5 constructor
	function __construct()
	{
		parent::__construct();
		//Do your magic here
	   $this->ion_auth->logged_in_check();
	}

	public function index()
	{
		// Get all active posts
		$this->data['posts'] = $this->post->status('live')->with_photo()->get_all();
	}

}