<?php if (! defined('BASEPATH')) exit('No direct script access');

class Tip_model extends MY_Model
{
	public $before_get = array('join_tables');

	//php 5 constructor
	function __construct()
	{
		parent::__construct();
	}

	public function join_tables()
	{
		$this->db
		->select('tips.*,username,first_name,last_name,email')
		->join('users','users.id = tips.user_id')
		->order_by('id','DESC');
		return $this;
	}

}