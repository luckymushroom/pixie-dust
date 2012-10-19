<?php if (! defined('BASEPATH')) exit('No direct script access');

class User_model extends MY_Model
{
	public $has_many = array('posts');
	function __construct()
	{
		parent::__construct();
	}

	public function active()
	{
		$this->db->where('active',TRUE);
		return $this;
	}

	public function pending()
	{
		$this->db->where('active',FALSE);
		return $this;
	}

	public function is_public()
	{
		$this->db->where('is_public', true);
		return $this;
	}

	public function not_user($user_id)
	{
		$this->db->where('id !=', $user_id);
		return $this;
	}

	public function aggregator($user_id)
	{
		$this->db->where('aggregator', $user_id);
		return $this;
	}

	public function is_aggregator()
	{
		$this->db->where('is_aggregator', true);
		return $this;
	}
	public function not_aggregator()
	{
		$this->db->where('is_aggregator', false);
		return $this;
	}
	/**
	 * get group id give a group name
	 * @param  string $group_name name of the group
	 * @return int group id
	 */
	public function get_group_id($group_name)
	{
		return $this->db->select('id')->where('name', 'farmers')->get('groups')->row()->id;
	}

	/**
	 * User Email notification scope
	 * @return boolean check if email notification is set
	 */
	public function email_notify()
	{
		$this->db->select('email_notification');
		return $this;
	}
	/**
	 * User SMS notification
	 * @return boolean check if sms notification is set
	 */
	public function sms_notify()
	{
		$this->db->select('sms_notification');
		return $this;
	}

    public function check_account($email)
    {
        $check = $this->user->get_by('email',$email);
        return ($check) ? TRUE : FALSE;
    }

    public function phone_number_exists($phone_number)
    {
        $check = $this->user->get_by('phone',$phone_number);
        return ($check) ? TRUE : FALSE;
    }

    public function aggregator_exists($code)
    {
    	$check = $this->user->get_by(array('is_aggregator' => $code))->id;
    	return ($check != 0) ? $check : FALSE;
    }
}
/* End of file user_model.php */
/* Location: ./application/models/user_model.php */