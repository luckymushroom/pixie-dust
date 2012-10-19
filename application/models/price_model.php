<?php if (! defined('BASEPATH')) exit('No direct script access');

class Price_model extends MY_Model
{
	public $before_create = array( 'created_at' );
    public $before_update = array( 'created_at', 'updated_at' );
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Get Location Name
	 */
	public function location_name()
	{
		$this->db->join('locations', 'locations.id = prices.location_id', 'left');
		return $this;
	}
	/**
	 * Get Product Name
	 */
	public function product_name()
	{
		$this->db->join('products', 'products.id = prices.product_id', 'left');
		return $this;
	}
	/**
	 * Get Username or user
	 */
	public function with_username()
	{
		$this->db->join('users', 'users.id = prices.user_id', 'left');
		return $this;
	}
	/**
	 * Get The Days prices
	 */
	function admin_get_prices($status, $date)
	{
		if($date):
			$this->db->where('crop_date', $date);
		else:
			$this->db->where('crop_date', '(SELECT max(crop_date) FROM prices)',false);
		endif;
		$this->db->where('crop_price >', '0');
		$this->db->where('prices.status', $status);
		$this->db->order_by('prices.product_id','desc');
		$this->db->select('prices.id,user_id,product_id,prices.location_id,crop_date,crop_weight,crop_unit,crop_price,prices.status,product_name,location_name,username');
		return $this;
	}

	/**
	 * get_prices
	 * @return result array.
	 */
	function get_prices($date=NULL)
	{
		if($date):
			$this->db->where('crop_date', $date);
		else:
			$this->db->where('crop_date', '(SELECT max(crop_date) FROM prices)',false);
		endif;
		$this->db->where('crop_price >', '0');
		$this->db->where('prices.status', 'live');
		$this->db->group_by(array('product_id','location_id','crop_weight'));
		$this->db->order_by('prices.product_id','desc');
		$this->db->select('prices.id,user_id,prices.product_id as product_id,prices.location_id,max(crop_date) as crop_date,crop_weight,crop_unit,crop_price,max(crop_price) as max_price,min(crop_price) as min_price,prices.status,product_name,location_name');
		return $this;
	}

	public function price_feed($product,$limit)
	{
		$this->db->select('product_id,location_id,user_id,crop_weight,crop_unit,crop_date,DATE_FORMAT(crop_date,"%a") as wk_date,
			MAX(if(location_id = 43,crop_price, NULL)) AS "NBI",
			MAX(if(location_id = 44,crop_price, NULL)) AS "MSA",
			MAX(if(location_id = 45,crop_price, NULL)) AS "KSM",
			MAX(if(location_id = 55,crop_price, NULL)) AS "ELD",
			MAX(if(location_id = 56,crop_price, NULL)) AS "KTL"', FALSE);
		$this->db->where('crop_date <', '(SELECT max(crop_date) FROM prices)', FALSE);
		$this->db->where('product_id', $product);
		$this->db->group_by(array('product_id','wk_date'));
		$this->db->order_by('crop_date', 'desc');
		$this->db->limit($limit);
		return $this;
	}

	public function price_fluctuation($date = '', $crop = '')
	{

	}

	public function select($columns)
	{
		$this->db->select($columns);
		return $this;
	}

	public function group()
	{
		$this->db->group_by(array('product_id','location_name'));
		$this->db->order_by('prices.id,crop_date','DESC');
		return $this;
	}

	public function group_by($column_name)
	{
		$this->db->group_by($column_name);
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

	public function limit($limit, $offset=0)
	{
		$this->db->limit($limit);
		return $this;
	}

}