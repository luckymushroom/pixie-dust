<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends MY_Model
{
	public function __construct()
	{
	   parent::__construct();
	   //Do your magic here
	}

	// Scope for products not selected by user
	public function not_selected($products)
	{
		$this->db->where_not_in('id', $products);
		return $this;
	}

	public function selected($products)
	{
		$this->db->where_in('id', $products);
		return $this;
	}

	public function search($column,$match)
	{
		$this->db->like($column, $match);
		return $this;
	}
}