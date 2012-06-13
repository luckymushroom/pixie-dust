<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct()
	{
	   parent::__construct();
	   //Do your magic here
	   $this->ion_auth->logged_in_check();
	}
	public function index()
	{
		$this->data['page_title'] = 'Dashboard';
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */