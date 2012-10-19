<?php if (! defined('BASEPATH')) exit('No direct script access');

class Farmers extends MY_Controller {

	protected $models = array('user');
	function __construct() 
	{
		parent::__construct();
		$this->per_page = 8;
	}
	
	function index() 
	{
		$this->data['title'] = 'Farmers';
		$this->data['farmers'] = $this->user->get_all();
	}

	public function create()
	{
		$create = $this->user->update($id, $data);
	}

	public function show($id)
	{
		$this->view = 'farmers/index';
		$this->data['title'] = 'My Farmers';
		$this->data['farmers'] = $this->user->get_many_by('aggregator',$id);
	}

	public function edit($id)
	{
		$this->data['farmer'] = $this->user->get($id);
	}

	public function delete($id)
	{
		$this->user->update($id,array('aggregator'=>0));
		if($this->db->affected_rows())
		{
			$this->session->set_flashdata('message','Farmer Removed Successful!');
			redirect("users/{$this->current_user}/farmers/", 'refresh');
		}
		else
		{
			$this->session->set_flashdata('message','Oops, Somethings went wrong. Please Try Again.');
			redirect("users/{$this->current_user}/farmers/",'refresh');
		}
	}

	public function pagination($url, $per_page, $total_rows, $code=0)
	{
		// Pagination
		$this->load->library('pagination');

		$config['base_url']   = base_url($url);
		$config['per_page']   = 8;
		$config['uri_segment'] = 3;
		$config['total_rows'] = $total_rows;
		$config['first_link'] = 'First';
		$config['last_link']  = 'Last';
		$config['num_links'] = 3;

		return $this->pagination->initialize($config);
	}
}