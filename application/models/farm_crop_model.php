<?php if (! defined('BASEPATH')) exit('No direct script access');

class Farm_crop_model extends MY_Model {

	public $before_get = array('join_commodities');
	//php 5 constructor
	function __construct()
	{
		parent::__construct();
	}

	public function join_commodities()
	{
		$this->db->select('farm_crops.*,product_name');
		$this->db->join('products', 'products.id = farm_crops.product_id');
	}

}