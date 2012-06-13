<?php if (! defined('BASEPATH')) exit('No direct script access');

class Price_model extends MY_Model {

	public $before_create = array('date_created');
	public $before_update = array('date_modified');
	//php 5 constructor
	function __construct()
	{
		parent::__construct();
	}

	public function date_created($post)
	{
		$post['date_created'] = date('Y-m-d H:i:s'); return $post;
	}

	public function date_modified($post)
	{
		$post['date_modified'] = date('Y-m-d H:i:s'); return $post;
	}

	/**
	 * [get_prices description]
	 * @param  crop_date $date=NULL   crop date entry in the database
	 * @param  records limit $limit=NULL  query limit
	 * @param  records offset $offset=NULL query offset
	 * @return result array.
	 */
	function get_prices($date=NULL,$limit=NULL,$offset=NULL)
	{
		$this->db->select('prices.id as m_id,product_name,prices.product_id as product_id,prices.location_id,location_name,max(crop_date) as crop_date,crop_weight,crop_unit,crop_price,max(crop_price) as max_price,min(crop_price) as min_price,flag,prices.status');
		$this->db->where('crop_price >', '0');
		$this->db->where('prices.status', 'live');
		if($date):
			$this->db->where('crop_date', $date);
		else:
			$this->db->where('crop_date', '(SELECT max(crop_date) FROM prices)',false);
		endif;
		$this->db->join('products', 'products.id = prices.product_id');
		$this->db->join('locations', 'locations.id = prices.location_id');
		$this->db->group_by(array('product_id','location_name','crop_weight'));
		$this->db->order_by('prices.product_id','desc');
		return $this;
	}

	public function where_price($operator = '>', $value = 0)
	{
		$this->db->where("crop_price ".$operator."", $value);
		return $this;
	}

	public function status($status = 'live')
	{
		$this->db->where('status', $status);
		return $this;
	}

	public function with_products()
	{
		$this->db->join('products', 'products.id = prices.product_id');
		return $this;
	}

	public function with_locations()
	{
		$this->db->join('locations', 'locations.id = prices.location_id');
		return $this;	
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