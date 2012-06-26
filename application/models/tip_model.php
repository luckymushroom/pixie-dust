<?php if (! defined('BASEPATH')) exit('No direct script access');

class Tip_model extends MY_Model
{
	public $after_get = array( 'get_user' );

	//php 5 constructor
	function __construct()
	{
		parent::__construct();
	}

	public function get_user($result)
	{
		$this->db->where('user_id', $result->user_id, FALSE);
		$this->db->select('username,first_name,last_name,email', FALSE);
		return $this;
	}

}