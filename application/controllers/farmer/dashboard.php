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
	   //Do your magic here
	   $this->ion_auth->logged_in_check();
	}
	public function index()
	{
        $this->data['posts'] = $this->post->get_many_by('user_id',$this->current_user);
        $this->data['orders'] = $this->post->get_many_by('user_id',$this->current_user);
        $this->data['tips']  = $this->tip->get_many_by('user_id',$this->current_user);
        $this->data['users'] = $this->user->get_all();
        $this->data['reports']   = 0;
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/farmer/dashboard.php */