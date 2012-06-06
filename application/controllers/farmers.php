<?php if (! defined('BASEPATH')) exit('No direct script access');

class Farmers extends MY_Controller {

	protected $models = array('user');
	//php 5 constructor
	function __construct()
	{
		parent::__construct();
	}
	/**
	 * list all farmer / farmers under set code
	 * @access public
	 * @param  string $aggregator_code aggregators code
	 * @return void
	 */
	function index()
	{
		$code = '';
		$this->data['title'] = 'All Farmers';
		$this->data['farmers'] = $this->user->in_group(2)->is_public()->not_aggregator()->not_user($this->current_user)->aggregator($code)->get_all();

	}
	/**
	 * Get Farmers in my group/ Exlucing myself
	 * @access public
	 * @param string $code
	 */
	public function my_farmers($code = '')
	{
		$this->view = 'farmers/index';
		// Get list of all farmers if public && is a farmer and belongs to you
		$code = $this->user->get($this->current_user)->aggregator;
		$this->data['code'] = (bool)$code;
		$this->data['title'] = 'My Farmers';
		$this->data['farmers'] = $this->user->in_group(2)->is_public()->not_aggregator()->not_user($this->current_user)->aggregator($code)->get_all();
	}
	/**
	 * add farmer / aggregate farmer
	 * @access public
	 * @param int $farmer_id farmer id
	 */
	public function add_farmer($farmer_id)
	{
		$this->view = false;
		// Check is user is an aggregator
		$is_aggregator = $this->user->is_aggregator()->get($this->current_user);
		if($is_aggregator)
		{
			// Load aggregator code
			$code = $is_aggregator->aggregator;
			if (!$code)
			{
				$code = strtolower(rand(5,5));
			}

			// Aggregater farmer
			$this->user->update($farmer_id,array('aggregator'=>$code));
			if($this->db->affected_rows())
			{
				$this->session->set_flashdata('message','Farmer Aggregation Successful!');
				redirect('farmers/index/'.$code, 'refresh');
			}
			else
			{
				$this->session->set_flashdata('message','Oops, Somethings went wrong. Please Try Again.');
				redirect('farmers','refresh');
			}
		}
		else
		{
			$this->session->set_flashdata('message','Please contact support@mfarm.co.ke to become An Aggregator.');
			redirect('farmers', 'refresh');
		}
	}
	/**
	 * remove farmer from aggregation
	 * @access public
	 * @param  int $farmer_id farmer id
	 * @return void
	 */
	public function remove_farmer($farmer_id)
	{
		// Check is user is an aggregator
		$is_aggregator = $this->user->is_aggregator()->get($this->current_user);
		if($is_aggregator)
		{
			// Load aggregator code
			$code = $is_aggregator->aggregator;
			$this->user->update($farmer_id,array('aggregator'=>''));
			if($this->db->affected_rows())
			{
				$this->session->set_flashdata('message','Farmer Removed Successful!');
				redirect('farmers/index/'.$code, 'refresh');
			}
			else
			{
				$this->session->set_flashdata('message','Oops, Somethings went wrong. Please Try Again.');
				redirect('farmers','refresh');
			}
		}
		else
		{
			$this->session->set_flashdata('message','Please contact support@mfarm.co.ke to become An Aggregator.');
			redirect('farmers', 'refresh');
		}
	}

}