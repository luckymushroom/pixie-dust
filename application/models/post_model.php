<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_model extends MY_Model
{
	public $before_get = array('join_tables');
	public $after_get = array('amount_available');
	public function __construct()
	{
	   parent::__construct();
	   //Do your magic here
	}

	/**
	 * @author mogetutu
	 * @access public
	 * Get the current users posts
	 */
	public function my_posts($user)
	{
		$this->db->where('user_id',$user);
		return $this;
	}

	public function recent($limit = '10')
	{
		$this->db->order_by('posts.id','DESC')->limit($limit);
		return $this;
	}
	/**
	 * @author mogetutu
	 * @access public
	 * Join tables
	 */
	public function join_tables()
	{
		$this->db
		->select('posts.*,image,product_desc,product_name,photo,caption,sum(order_details.quantity) as total_weight')
		->join('products','products.id = posts.product_id')
		->join('order_details','posts.id = order_details.post_id')
		->join('photos','photos.post_id = posts.id','left');
		return $this;
	}
	/**
	 * @author mogetutu
	 * @access public
	 * Calculate the available amount of a posting on the marketplace
	 */
	public function amount_available($result)
	{
		$result->amount_available = ($result->product_weight - $result->total_weight);
		return $result;
	}

	public function status($status)
	{
		$this->db->where('post_status',$status);
		return $this;
	}

	public function with_photo()
	{
		$this->db->group_by('posts.id');
		return $this;
	}

	public function filter_ids($ids)
	{
		$this->db->where('id', $ids);
	}

	public function price_feed($crop)
	{	
		$Q = 'SELECT product_name,crop_weight,crop_unit,crop_date,DATE_FORMAT(crop_date,"%a") as wk_date,
			MAX(if(location_id = 43,crop_price, NULL)) AS "NBI",
			MAX(if(location_id = 44,crop_price, NULL)) AS "MSA",
			MAX(if(location_id = 45,crop_price, NULL)) AS "KSM",
			MAX(if(location_id = 55,crop_price, NULL)) AS "ELD",
			MAX(if(location_id = 56,crop_price, NULL)) AS "KTL"
			FROM prices
			JOIN products on products.id = prices.product_id
			WHERE crop_date < (SELECT max(crop_date) FROM prices)
			AND crop_date > ((SELECT max(crop_date) FROM prices) - INTERVAL 5 DAY)
			AND prices.product_id = "'.$crop.'"
			AND prices.status ="live"
			GROUP BY prices.product_id,wk_date
			ORDER BY crop_date DESC';
		return $this->db->query($Q)->result();
	}
}