<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting_model extends MY_Model
{
	public $before_get = array('join_tables');
	public function __construct()
	 {
	    parent::__construct();
	    //Do your magic here
	 }

	 public function join_tables()
	 {
	 	$this->db->select('settings.*,users.id')->join('users','users.id = settings.user_id');
	 	return $this;
	 }

	 public function setting($setting_code)
	 {
	 	$this->db->select('setting_value')->where('setting_code',$setting_code);
	 	return $this;
	 }

	 public function notifications()
	 {
	 	$this->db->where('setting_group','NOTIFICATION');
	 	return $this;
	 }
}