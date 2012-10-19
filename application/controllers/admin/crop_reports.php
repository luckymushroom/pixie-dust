<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Copyright (c) 2012 MFARM LTD.
 * All rights reserved.
 *
 *
 * @package     M-Farm Web Application
 * @subpackage  Crop Reports Module
 * @author      mogetutu <imogetutu@gmail.com>
 * @copyright   2012 MFARM LTD.
 * @link        http://mfarm.co.ke
 * @version     1.0
 */
class Crop_reports extends MY_Controller
{
	protected $models = array('crop_report','user', 'location', 'product');
	public function __construct()
	{
		parent::__construct();
		$this->ion_auth->logged_in_check();
	}

	public function index()
	{
		$filter = $this->input->post();
		if(isset($filter))
		{
			foreach ($filter as $key => $value) 
			{
				$this->data[$key] = $value;
			}
		}

		$this->data['locations'] = $this->location->current_markets();
		$this->data['products'] = $this->product->dropdown('product_name');
		$this->data['reports'] = $this->crop_report->match('locations')->match('products')->filter($filter)->get_all();
	}

}

/* End of file crop_reports.php */
/* Location: ./application/controllers/admin/crop_reports.php */