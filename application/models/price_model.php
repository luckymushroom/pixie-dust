<?php if (! defined('BASEPATH')) exit('No direct script access');

class Price_model extends MY_Model {

	public $before_get = array('get_prices');
	//php 5 constructor
	function __construct()
	{
		parent::__construct();
	}

	function get_prices()
	{
		$this->db->select('product_name,location_name,max(crop_date) as crop_date,crop_weight,crop_unit,crop_price');
		$this->db->where('crop_price >', '0');
		$this->db->where('prices.status', 'live');
		$this->db->join('products', 'products.id = prices.product_id');
		$this->db->join('locations', 'locations.id = prices.location_id');
		$this->db->group_by(array('product_id','location_name'));
		$this->db->order_by('prices.id,crop_date','DESC');
	}

	public function product($product_id)
	{
		if(is_array($product_id))
		{
			$this->db->where_in('product_id', $product_id);
		}
		else
		{
			$this->db->where('product_id', $product_id);
		}
		return $this;
	}

	public function price_date($date)
	{
		if($date):
			$this->db->where('crop_date', $date);
		else:
			$this->db->where('crop_date', '(SELECT max(crop_date) FROM prices)', false);
		endif;

		return $this;
	}

	public function location($location_id)
	{
		if(is_array($location_id))
		{
			$this->db->where_in('location_id', $location_id);
		}
		else
		{
			$this->db->where('location_id', $location_id);
		}
		return $this;
	}

	public function limit($limit)
	{
		$this->db->limit($limit);
		return $this;
	}

	public function group_by($columns)
	{
		$this->db->group_by($columns);
		return $this;
	}

}