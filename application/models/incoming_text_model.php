<?php if (! defined('BASEPATH')) exit('No direct script access');

class Incoming_text_model extends MY_Model {

	public $before_create = array('date_created');
	//php 5 constructor
	function __construct()
	{
		parent::__construct();
	}

	function date_created($post)
	{
		$post['date_created'] = date('Y-m-d H:i:s'); return $post;
	}

	public function since($date_range)
	{
		$this->db->where('date_created >= ', "'".$date_range."'", FALSE);
		return $this;
	}

}