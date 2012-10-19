<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MY_Controller {

	protected $models = array('user');
	public function __construct()
	{
		parent::__construct();
		$this->ion_auth->logged_in_check();
		if(!$this->ion_auth->is_admin()) $this->ion_auth->logout();
	}

	public function index($id = null)
	{
		($id) ? $this->data['user'] = $this->user->get($id) : $this->data['users'] = $this->user->with_deleted()->get_all();
		if($this->input->is_ajax_request())
		{
			echo json_encode("<div id='user-card' class='modal hide fade'>
				    <div class='modal-header'>
				      <a class='close' data-dismiss='modal' >&times;</a>
				      <h3>User Profile:</h3>
				    </div>
				    <div class='modal-body'>
				    	<p>Name: Isaak Mogetutu</p>
				    	<p>Email: mogetutu@mogetutu.com</p>
				    	<hr>
				    	<p>Bio: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				    	quis nostrud exercitation ullamco.</p>
				    </div>
				    <div class='modal-footer'>
				        <div class='btn-group'>
				            <a href='#' class='btn'>Reset Password</a>
				            <a href='#' class='btn'>Make Aggregator</a>
				            <a href='#' class='btn'>Make Administrator</a>
				        </div>
				    </div>
				</div>");
		}
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
			redirect('users','refresh');
		}
		else
		{
			$this->session->set_flashdata('message', 'Ooops Something Went Wrong!');
			redirect('users/index','refresh');
		}
	}

	/**
	 * Generate Aggregator Code and update user group of account
	 */
	public function aggregator_code($id)
	{
		$characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
		$random_string_length = 5;

		$string = '';
		for ($i = 0; $i < $random_string_length; $i++)
		{
			$string .= strtoupper($characters[rand(0, strlen($characters) - 1)]);
		}

		$check = $this->user->aggregator_exists($string);

		if ($check === FALSE)
		{
			$this->user->update($id, array('is_aggregator' => $string));
			$this->user_group->update_by(array('user_id'=> $id), array('group_id' => 4));
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