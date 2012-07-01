<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	protected $models = array('post');
	public function __construct()
	{
	   parent::__construct();
	   //Do your magic here
	   $this->ion_auth->logged_in_check();
	   $seller = 'layouts/seller_template';
	   $admin = 'layouts/admin_template';
	   $this->layout = ($this->ion_auth->in_group('admin')) ? $admin : $seller ;
       if ($this->ion_auth->in_group('editors')) 
       {
       		redirect('/blog/manage/');
       }
	}
	public function index()
	{
		$this->data['posts'] = count($this->post->deleted()->get_many_by('user_id',$this->current_user));
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */