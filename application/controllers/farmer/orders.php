<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Copyright (c) 2012 MFarm LTD.
 * All rights reserved.
 *
 * @package     Orders HTTP POST Controller
 * @author      isaak mogetutu <imogetutu@gmail.com>
 * @copyright   2012 MFarm LTD.
 * @package     Orders Module
 * @link        http://mfarm.co.ke
 * @version     @@PACKAGE_VERSION@@
 */
class Orders extends MY_Controller
{
	protected $models = array('order','order_detail','post','user','process_step');
	public function __construct()
	{
		parent::__construct();
		$this->ion_auth->logged_in_check();
	}

	/**
	 * List Orders
	 */
	public function index()
	{
		// Load current session user's orders
		$this->data['orders'] = $this->order_detail->post()->user()->product()->get_many_by('user_id', $this->current_user);
	}
}

/* End of file orders.php */
/* Location: ./application/controllers/farmer/orders.php */