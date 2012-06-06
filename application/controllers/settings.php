<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends MY_Controller
{
	protected $models = array('user','tip');
	public function __construct()
	{
	   parent::__construct();
	   //Do your magic here
	   $this->ion_auth->logged_in_check();
	}
	/**
	 * Load user settings page
	 * @author isaak mogetutu <imogetutu@gmail.com>
	 * @return void
	 */
	public function index()
	{
		// Check if user has settings in the system
		$this->data['sms'] = $this->user->sms_notify()->get($this->current_user)->sms_notification;
		$this->data['email'] = $this->user->email_notify()->get($this->current_user)->email_notification;
		$this->data['user'] = $this->ion_auth->profile();
	}

	/**
	 * Update user notification settings
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @return void
	 */
	public function update_settings()
	{
		$this->view = false;
		$sms_notify = ($this->input->post('sms')) ? $this->input->post('sms') : '0';
		$email_notify = ($this->input->post('email')) ? $this->input->post('email') : '0';
		// Grab Post Array
		$post = array(
			'sms_notification' => $sms_notify,
			'email_notification' => $email_notify
			);
		// Update settings
		$this->user->update($this->current_user,$post);

		if($this->db->affected_rows())
		{
			$this->session->set_flashdata('message', 'Your Settings have been Updated to the System');
			redirect('settings','refresh');
		}
		else
		{
			$this->session->set_flashdata('message', 'Oops, Something Went wrong please Try Again!');
			redirect('settings','refresh');
		}

	}
	/**
	 * Load User Profile Page
	 * @author isaak mogetutu <imogetutu@gmail.com>
	 * @return void
	 */
	public function profile()
	{
		// Load user profile from ion_auth library
		$this->data['user'] = $this->ion_auth->profile();
		$this->data['tips'] = $this->tip->get_many_by('user_id',$this->current_user);

		if($this->input->post())
		{
			// Update on request
			$update = $this->db->where('id',$this->current_user)->update('users',$this->input->post());
			if($this->db->affected_rows())
			{
				$this->session->set_flashdata('message','Your Profile has been Updated!');
				redirect('/settings/profile','refresh');
			}
			else
			{
				$this->session->set_flashdata('message','Noting Changed');
				redirect('/settings/profile','refresh');
			}

		}
	}
	/**
	 * All User to send Invitations to other farmers
	 * @author isaak mogetutu <imogetutu@gmail.com>
	 * @param  string $list invitation type loaded
	 * @return void
	 */
	public function invitations($list = 'all')
	{
		// Load pending vs active invitations
		switch ($list)
		{
			case 'all': $this->data['invitations'] = $this->user->get_many_by('referral_id',$this->current_user);
				break;
			case 'active': $this->data['invitations'] = $this->user->active()->get_many_by('referral_id',$this->current_user);
				break;
			case 'pending': $this->data['invitations'] = $this->user->pending()->get_many_by('referral_id',$this->current_user);
				break;
		}

		// Form validation
		$this->form_validation->set_rules('first_name', 'First Name', 'required|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
		// Form validation check
		if($this->input->post() && $this->form_validation->run())
		{
			$username = strtolower($this->input->post('first_name')) . ' ' . strtolower($this->input->post('last_name'));
			$email = $this->input->post('email', TRUE);
			$password = rand ( 10000 , 99999 );
			$additional_data = array('first_name' => $this->input->post('first_name'),'last_name' => $this->input->post('last_name'));
		}
		// Check if invitation was sent
		if($this->form_validation->run() == true && $this->ion_auth->invitation_request($username,$password,$email,$additional_data))
		{
			$this->session->set_flashdata('message','Invitation sent to '.$email);
			redirect('/settings/invitations','refresh');
		}
		else
		{
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('message',$this->ion_auth->errors());
			$this->uri->uri_string() || redirect('/settings/invitations','refresh');
		}
	}
	/**
	 * upload profile photo
	 * @author isaak mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @version 1.0
	 * @return void
	 */
	public function upload_photo()
	{
		if($_FILES['user_avatar']['error'] == 0)
		{
			//upload and update the file
			$config['upload_path'] = './media/avatars/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['overwrite'] = false;
			$config['remove_spaces'] = true;
			//$config['max_size']   = '100';// in KB

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('user_avatar'))
			{
			    $this->session->set_flashdata('message', $this->upload->display_errors());
			    redirect('settings/profile');
			}
			else
			{
			    //Image Resizing
			    $config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
			    $config['maintain_ratio'] = FALSE;
			    $config['width'] = 160;
			    $config['height'] = 120;
				$this->load->library('image_lib', $config);
				if ( ! $this->image_lib->resize())
				{
			        $this->session->set_flashdata('message', $this->image_lib->display_errors());
			    }

			    $this->user->update($this->current_user,array('avatar'=>$this->upload->file_name));
			    //Need to update the session information if email was changed
			    if ($this->db->affected_rows())
			    {
			    	$this->session->set_flashdata('message', 'Your Photo has been Uploaded!');
			    	redirect('settings/profile');
			    }

			}
		}
	}
	/**
	 * User Farming tips to the public
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @version 1.0
	 * @param  array  $params user and tip to be posted
	 * @return void
	 */
	public function tips($params = array())
	{
		$this->data['tips'] = $this->tip->get_many_by('user_id',$this->current_user);

		$this->form_validation->set_rules('tip','Tip','required|xss_clean');

		if ($this->input->post() && $this->form_validation->run() == true)
		{
			$_POST['user_id'] = $this->current_user;
			$_POST['date_added'] = date('Y-m-d H:i:s');
			$add = $this->tip->insert($this->input->post());
			if($add)
			{
				$this->session->set_flashdata('message','You tip has been added');
				redirect('settings/tips/');
			}
			else
			{
				$this->session->set_flashdata('message', 'Something Went Wrong!');
				redirect('settings/tips/', 'refresh');
			}
		}
	}

	/**
	 * List all tips for the user and others
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @return void
	 */
	public function all_tips($params = array())
	{
		$this->data['tips'] = $this->tip->get_all();
	}
	/**
	 * delete a user tips
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @param  int $tip_id
	 * @return void
	 */
	public function delete_tip($tip_id = '')
	{
		$tip_id = $this->uri->segment(3);
		$delete_tip = $this->tip->delete($tip_id);
		if($delete_tip)
		{
			$this->session->set_flashdata('message','Your tip has been deleted!');
			redirect('settings/tips/','refresh');
		}
		else
		{
			$this->session->set_flashdata('message','Oops! Something went wrong. Try Again');
			redirect('settings/tips/','refresh');
		}
	}

}

/* End of file settings.php */
/* Location: ./application/controllers/settings.php */