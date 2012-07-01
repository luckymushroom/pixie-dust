<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Help extends MY_Controller 
{
	public function __construct()
	{
	   parent::__construct();
	   //Do your magic here
	   $seller = 'layouts/seller_template';
	   $admin = 'layouts/admin_template';
	   $this->layout = ($this->ion_auth->in_group('admin')) ? $admin : $seller ;
	}

	public function index()
	{

	}

}

/* End of file help.php */
/* Location: ./application/controllers/help.php */