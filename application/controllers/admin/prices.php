<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Copyright (c) 2012 MFarm LTD.
 * All rights reserved.
 *
 * @package     Orders HTTP POST Controller
 * @author      isaak mogetutu <imogetutu@gmail.com>
 * @copyright   2012 MFarm LTD.
 * @package     Prices Module
 * @link        http://mfarm.co.ke
 * @version     @@PACKAGE_VERSION@@
 */
class Prices extends MY_Controller
{

	// Load models here
	protected $models = array('price','product');
	/**
	 * Load constructor here
	 */
	public function __construct()
	{
		parent::__construct();
		$this->ion_auth->logged_in_check();
	}

	/**
	 * Load the days prices
	 * @author mogetutu
	 * @access public
	 * @return price array for the day.
	 */
	public function index($status = 'live', $date = null)
	{
		$this->data['prices'] = $this->price->product_name()
		->location_name()
		->with_username()
		->admin_get_prices($status, $date)
		->get_all();

	}

	/**
	 * Update of price(s) states from live to pending for erroneous records
	 * @author mogetutu
	 * @access public
	 * @return boolean
	 */
	public function change_status()
	{
		$this->view = false;
		$status = $this->input->post('submit');
		$primary_values = $this->input->post('status');
		$status = ($status == 'Make Pending') ? array('status' => 'pending') : array('status' => 'live');

		// update records
		if($primary_values !== null)
		{
			if($this->price->update_many($primary_values, $status) AND $this->db->affected_rows())
			{
				$this->session->set_flashdata('message','Record(s) Updated');
				redirect('admin/prices/index/');
			}
			else
			{
				$this->session->set_flashdata('message','Oops something went wrong. Please Try Again.');
				redirect('admin/prices/');
			}	
		}
		else
		{
			$this->session->set_flashdata('message','Oops Nothing Selected. Please Try Again.');
			redirect('admin/prices/');
		}

	}

	/**
	 * Load price item for edit or viewing
	 * @author mogetutu
	 * @access public
	 * @param $id integer
	 * @return void
	 */
	public function view($id)
	{
		$this->data['options'] = $this->product->dropdown('id','product_name');
		if ($this->price->get($id))
		{
			$this->data['id'] = $id;
			$this->data['record'] = $this->price->with_username()->location_name()->get_by('prices.id',$id);
		}
		else
		{
			$this->session->set_flashdata('message','Record Not Found');
			redirect('admin/prices', 'refresh');
		}
	}

	/**
	 * Updated selected price item
	 * @author mogetutu
	 * @access public
	 * @param $id integer
	 * @return boolean
	 */
	public function edit($id)
	{
		$this->view = FALSE;
		$data = array(
			'product_id' => $this->input->post('product_id', TRUE),
			'crop_weight' => $this->input->post('crop_weight', TRUE),
			'crop_unit' => $this->input->post('crop_unit', TRUE),
			'crop_price' => $this->input->post('crop_price', TRUE)
			);
		if($this->price->update($id,$data))
		{
			$this->session->set_flashdata('message','Record Updated');
			redirect('admin/prices', 'refresh');
		}
		else
		{
			$this->session->set_flashdata('message','Oops! Record Not Updated');
			redirect('admin/prices', 'refresh');
		}
	}

	/**
	 * Delete price item from records
	 * @author mogetutu
	 */
	public function delete($id)
	{
		$delete = $this->price->update($id,array('deleted'=>1));
		if($delete)
		{
			$this->session->set_flashdata('message','Record(s) Deleted');
			redirect('admin/prices', 'refresh');
		}
		else
		{
			$this->session->set_flashdata('message','Oops something went wrong. Please Try Again.');
			redirect('admin/prices', 'refresh');
		}
	}

	/**
	 * Crops that have not been reported
	 * @author mogetutu
	 */
	public function missing_crops()
	{
		$crops = $this->product->get_all();
		$prices = $this->price->group_by('product_id')->get_all();
		foreach ($prices as $crop)
		{
			$reported_crops[] = $crop->product_id;
		}
		foreach ($crops as $row)
		{
			$all_crops[] = $row->id;
		}
		$missing_crops = array_diff($all_crops, $reported_crops);
		return $missing_crops;
	}

}

/* End of file prices.php */
/* Location: ./application/controllers/prices.php */