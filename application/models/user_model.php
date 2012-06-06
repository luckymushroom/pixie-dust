<?php if (! defined('BASEPATH')) exit('No direct script access');

class User_model extends MY_Model
{

	//php 5 constructor
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

	public function aggregator($code)
	{
		$this->db->where('aggregator', $code);
		return $this;
	}

	public function is_aggregator()
	{
		$this->db->where('is_aggregator', TRUE);
		return $this;
	}
	public function not_aggregator()
	{
		$this->db->where('is_aggregator', FALSE);
		return $this;
	}
	/**
	 * array of user_ids is selected group
	 * @param  string/int $group group name or id
	 * @return array or user ids
	 */
	public function in_group($group)
	{
		$user_ids = self::by_group_id($group);

		$this->db->where_in('id', $user_ids);
		return $this;
	}
	/**
	 * get list of users of a the set group id
	 * @param  int $group_id group id
	 * @return array
	 */
	public function by_group_id($group)
	{
		if (is_string($group))
			$group_id = self::get_group_id($group);
		else
			$group_id = $group;

		$users = $this->db->select('user_id')->where('group_id', $group_id)->get('users_groups')->result();
		foreach ($users as $row) {
			$user_ids[] = $row->user_id;
		}
		return $user_ids;
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

	/**
	 * Refactor code to look for farmer and buyer group from controller and pass and paramter
	 * Remove hard coding of groups
	 */
	public function is_farmer($user, $group = 2)
	{
		$user = $this->db->where('user_id',$user)->where('group_id',$group)->get('users_groups')->result();
		return ($user) ? TRUE : FALSE ;
	}

	public function is_buyer($user, $group = 3)
	{
		$user = $this->db->where('user_id',$user)->where('group_id',$group)->get('users_groups')->result();
		return ($user) ? TRUE : FALSE ;
	}

}