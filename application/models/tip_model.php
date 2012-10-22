<?php if (! defined('BASEPATH')) exit('No direct script access');

class Tip_model extends MY_Model
{
	public $before_create = array( 'created_at' );
    public $before_update = array( 'created_at', 'updated_at' );

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