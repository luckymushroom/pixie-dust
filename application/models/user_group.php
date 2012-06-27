<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_group extends MY_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function is_admin()
	{
		$admin = self::get_admin_group_id();
		$this->db->where('group_id',$admin);
	}

	public function get_admin_group_id()
	{
		$admin_group = $this->config->item('admin_group', 'ion_auth');
		$this->db->where('name', $admin_group);
		return $this->db->get('groups', 1)->row()->id;
	}

}

/* End of file user_group.php */
/* Location: ./application/models/user_group.php */