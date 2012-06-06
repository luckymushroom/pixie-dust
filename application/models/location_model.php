<?php if (! defined('BASEPATH')) exit('No direct script access');

class Location_model extends MY_Model {

	//php 5 constructor
	function __construct()
	{
		parent::__construct();
	}

	function search($column,$match)
	{
		$this->db->like($column, $match);
		return $this;
	}

}