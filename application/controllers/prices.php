<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prices extends MY_Controller {

	protected $models = array('price','product');
	public function __construct()
	{
		parent::__construct();
		// Check is bugger is logged
		$this->ion_auth->logged_in_check();
	}

	public function index()
	{
		$this->data['prices'] = $this->price->deleted()->get_all();
	}

	public function test()
	{
		$this->view = false;
	}

	public function change_status()
	{
		$this->view = false;
		$status = $this->input->post('submit');
		$primary_values = $this->input->post('status');

		$status = ($status == 'pending') ? array('status' => 0) : array('status' => 1) ;
		// update records
		if($this->price->update_many($primary_values, $status))
		{
			$this->session->set_flashdata('message','Record(s) Updated');
			redirect('prices', 'refresh');
		}
		else
		{
			$this->session->set_flashdata('message','Oops something went wrong. Please Try Again.');
			redirect('prices', 'refresh');
		}
	}

	public function view($id)
	{
		$this->data['options'] = $this->product->dropdown('id','product_name');
		if ($this->price->get($id)) 
		{
			$this->data['record'] = $this->price->get($id);
		}
		else
		{
			$this->session->set_flashdata('message','Record Not Found');
			redirect('prices', 'refresh');
		}
	}
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
			redirect('prices', 'refresh');
		}
		else
		{
			$this->session->set_flashdata('message','Oops! Record Not Updated');
			redirect('prices', 'refresh');
		}
	}

	public function delete($id)
	{
		$delete = $this->price->update($id,array('deleted'=>1));
		if($delete)
		{
			$this->session->set_flashdata('message','Record(s) Deleted');
			redirect('prices', 'refresh');
		}
		else
		{
			$this->session->set_flashdata('message','Oops something went wrong. Please Try Again.');
			redirect('prices', 'refresh');
		}
	}

	public function filters($column, $value)
	{
		$column = ($column == 'status') ? 'status' : 'location_id' ;

	}

	/**
	 * Crops that have not been reported
	 */
	public function missing_crops()
	{
		$crops = $this->product->deleted()->get_all();
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