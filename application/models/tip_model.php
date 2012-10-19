<?php if (! defined('BASEPATH')) exit('No direct script access');

class Tip_model extends MY_Model
{
	protected $soft_delete = TRUE;

	function __construct()
	{
		parent::__construct();
	}

	public function match_user()
	{
		$this->db->join('users', 'users.id = tips.user_id', 'left');
		return $this;
	}

}