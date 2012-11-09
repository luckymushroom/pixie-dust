<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MY_Controller {

	protected $models = array('user', 'user_group');
	public function __construct()
	{
		parent::__construct();
		$this->ion_auth->logged_in_check();
		if(!$this->ion_auth->is_admin()) $this->ion_auth->logout();
	}

	public function index()
	{
		$this->data['users'] = $this->user->get_all();
	}

	public function show($id)
	{
		$this->data['user'] = $user = $this->user->get($id);
	}

	public function status($state)
	{
		$this->view = 'admin/users/index';
		$this->data['type'] = $state;
		$state = ($state=='active') ? 1 : 0;
		$this->data['users'] = $this->user->get_many_by('active', $state);
	}
	/**
	 * Delete users account
	 */
	public function delete($id)
	{
		if ($this->user->delete($id))
		{
			$this->session->set_flashdata('message', 'User Account was deleted!');
			redirect('admin/users','refresh');
		}
		else
		{
			$this->session->set_flashdata('message', 'Ooops Something Went Wrong!');
			redirect('admin/users/index','refresh');
		}
	}

	/**
	 * Generate Aggregator Code and update user group of account
	 */
	public function aggregator_code($id)
	{
		$view = 'false';
		$characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
		$random_string_length = 5;

		$string = '';
		for ($i = 0; $i < $random_string_length; $i++)
		{
			$string .= strtoupper($characters[rand(0, strlen($characters) - 1)]);
		}

		$check = $this->user->aggregator_exists($string);
		$aggregator = $this->user->get($id)->is_aggregator;
		if ($check === FALSE && $aggregator == 0)
		{
			$this->user->update($id, array('is_aggregator' => $string));
			$this->user_group->delete_by('user_id', $id);
			$this->user_group->insert(array('user_id'=> $id, 'group_id' => 4));
			$this->session->set_flashdata('message', 'Aggregator Code Generated');
		}
		else
		{
			$this->session->set_flashdata('message', 'Code is in Use!');
		}

		redirect("admin/users/{$id}");
	}

}

/* End of file users.php */
/* Location: ./application/controllers/admin/users.php */