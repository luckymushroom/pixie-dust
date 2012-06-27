<?php if (! defined('BASEPATH')) exit('No direct script access');

class Price_model extends MY_Model {

	public $after_get = array( 'get_username', 'get_product_name', 'get_location_name' );
	public $before_create = array( 'timestamps' );

    
	//php 5 constructor
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Timestamps on create and update
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @param $object price post object
	 */
	protected function timestamps($price)
    {
        $price['date_created'] = $price['date_updated'] = date('Y-m-d H:i:s');
        return $price;
    }
    /**
     * @author mogetutu <imogetutu@gmail.com>
     * @param $result array()
     * @return $result array()
     */
	public function get_location_name($result)
	{
		$result->location = $this->db->where('id',$result->location_id)->get('locations',1)->row()->location_name;
		return $result;
	}
	/**
	 * Get Product name from product_id
	 * @access public
	 * @author mogetutu <imogetutu@gmail.com>
	 * @return array result
	 */
	public function get_product_name($result)
	{
		if ($result->product_id) {
			$result->product_name = $this->db->where('id',$result->product_id)->get('products',1)->row()->product_name;
			return $result;
		}
		
	}
	/**
	 * Get username for user_id in result array
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @param $array result
	 * @return array alter user_id on the way back from the db
	 */
	public function get_username($result)
	{
		$result->username = $this->db->where('id',$result->user_id)->get('users',1)->row()->first_name;
		return $this;
	}

	public function latest()
	{
		$this->db->where('crop_date', '(SELECT max(crop_date) FROM prices)',false);
		$this->db->where('crop_price >', '0');
		return $this;
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
		$this->db->select('prices.id as m_id,user_id,product_name,prices.product_id as product_id,prices.location_id,location_name,max(crop_date) as crop_date,crop_weight,crop_unit,crop_price,max(crop_price) as max_price,min(crop_price) as min_price,flag,prices.status');
		$this->db->where('crop_price >', '0');
		$this->db->where('prices.status', '1');
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

	public function price_feed($crop,$limit)
	{
		$this->db->select('product_id,location_id,user_id,crop_weight,crop_unit,crop_date,DATE_FORMAT(crop_date,"%a") as wk_date,
			MAX(if(location_id = 43,crop_price, NULL)) AS "NBI",
			MAX(if(location_id = 44,crop_price, NULL)) AS "MSA",
			MAX(if(location_id = 45,crop_price, NULL)) AS "KSM",
			MAX(if(location_id = 55,crop_price, NULL)) AS "ELD",
			MAX(if(location_id = 56,crop_price, NULL)) AS "KTL"', FALSE);
		$this->db->where('crop_date <', '(SELECT max(crop_date) FROM prices)', FALSE);
		$this->db->where('product_id', $crop);
		$this->db->group_by(array('product_id','wk_date'));
		$this->db->order_by('crop_date', 'desc');
		$this->db->limit($limit);
		return $this;
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

	public function limit($limit)
	{
		$this->db->limit($limit);
		return $this;
	}

}