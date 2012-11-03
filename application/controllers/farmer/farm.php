<?php if (! defined('BASEPATH')) exit('No direct script access');
/**
 * Copyright (c) 2012 MFARM LTD.
 * All rights reserved.
 *
 *
 * @package     M-Farm Web Application
 * @subpackage  Farm Module
 * @author      mogetutu <imogetutu@gmail.com>
 * @copyright   2012 MFARM LTD.
 * @link        http://mfarm.co.ke
 * @version     1.0
 */
class Farm extends MY_Controller
{
	protected $models = array('county','farm_detail','product','farm_crop','user');
	function __construct()
	{
		parent::__construct();
	   $this->ion_auth->logged_in_check();
	}

	public function index($user_id)
	{
		// Form
		$this->data['counties'] = $this->county->dropdown('id','county_name');
		$this->data['username'] = $this->user->get($user_id)->username;
		$farm = $this->farm_detail->get_by('user_id',$user_id);
		self::list_row_items($farm);
		$this->data['county_id'] = ($farm) ? $farm->county_id : 47;
		// Update or insert data of user
		if ($this->input->post())
		{
			if($farm)
			{
				// Update Record
				$update = $this->farm_detail->update($farm->id,$this->input->post());
				if($this->db->affected_rows())
				{
					$this->session->set_flashdata('message','Shamba detail has been updated');
					redirect($this->router->directory . 'farm/index/' . $user_id, 'refresh');
				}
			}
			else
			{
				// Add Record
				$_POST['user_id'] = $user_id;
				$add = $this->farm_detail->insert($this->input->post());
				if($add)
				{
					$this->session->set_flashdata('message','Detail has been added');
					redirect($this->router->directory . 'farm/index/' . $user_id, 'refresh');
				}
			}
		}

	}
	/**
	 * List Add and Update crops grown by farmer
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @param  int $user_id user id
	 * @return void
	 */
	public function crops_grown($user_id)
	{
		// List crops in mfarm
		// Add to list of crop grown
		$this->data['username'] = $this->user->get($user_id)->username;
		$this->data['product_id'] = '';
		$this->data['products'] = $this->product->dropdown('id','product_name');
		$this->data['crops'] = $this->farm_crop->get_many_by('user_id',$user_id);
		$id = $this->input->post('id',TRUE);
		if($this->input->post())
		{
			if($id)
			{
				$update = $this->farm_crop->update($id,$this->input->post());
				if($this->db->affected_rows())
				{
					$this->session->set_flashdata('message','Planting Details updated');
					redirect('/farm/crops_grown/'.$user_id,'refresh');
				}
			}
			else
			{
				$_POST['user_id'] = $user_id;
				$add = $this->farm_crop->insert($this->input->post());
				if($add)
				{
					$this->session->set_flashdata('message','Planting Details added');
					redirect('/farm/crops_grown/'.$user_id,'refresh');
				}
			}
		}
	}
	/**
	 * Edit Crop Details of Post
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @param  int $id
	 * @return void
	 */
	public function edit_crops_grown($id)
	{
		$this->data['products'] = $this->product->dropdown('id','product_name');
		$this->data['item'] = $this->farm_crop->get_by('farm_crops.id',$id);
	}
	/**
	 * Run thru row items and add the to the $this->data array()
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @return array
	 */
	public function list_row_items($row)
	{
		if($row)
		{
			foreach ($row as $key => $value) {
				$this->data[$key] = $value;
			}
			return $row;
		}
		return false;
	}

	public function harvest()
	{

	}
}