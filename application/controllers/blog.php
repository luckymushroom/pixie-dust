<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// Blog will be here
		$this->data['page_title'] = 'Our Blog';
		$this->data['page_subtitle'] = 'Sometimes Great Ideas Come From a Story';
	}

}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */