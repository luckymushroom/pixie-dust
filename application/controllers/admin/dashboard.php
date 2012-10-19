<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Copyright (c) 2012 MFARM LTD.
 * All rights reserved.
 *
 *
 * @package     M-Farm Web Application
 * @subpackage  Dashboard Module
 * @author      mogetutu <imogetutu@gmail.com>
 * @copyright   2012 MFARM LTD.
 * @link        http://mfarm.co.ke
 * @version     1.0
 */
class Dashboard extends MY_Controller {

	protected $models = array('post','tip','order','user','incoming_text');
	public function __construct()
	{
	   parent::__construct();
	   $this->ion_auth->logged_in_check();
       if ($this->ion_auth->in_group('editors'))
       {
       		redirect('admin/blog/');
       }
	}
	public function index()
	{
        $this->data['posts'] = $this->post->get_many_by('user_id',$this->current_user);
        $this->data['tips']  = $this->tip->get_many_by('user_id',$this->current_user);
        $this->data['users'] = $this->user->get_all();
        $this->data['sms']   = $this->incoming_text->get_all();

	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/admin/dashboard.php */