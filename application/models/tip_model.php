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
		$result->username = $this->db->get_where('users', array('id'=>$result->user_id))->row()->username;
		return $result;
	}

}