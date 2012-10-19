<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_model extends MY_Model
{
	public $before_create = array( 'created_at' );
    public $before_update = array( 'created_at', 'updated_at' );

	public function __construct()
	{
	   parent::__construct();
	}

	public function select($columns)
	{
		$this->db->select($columns);
		return $this;
	}

	/**
	 * @author mogetutu
	 * @access public
	 * Get the current users posts
	 */
	public function my_posts($user)
	{
		$this->db->where('posts.user_id',$user);
		return $this;
	}
	/**
	 * Get recent 10 items posted
	 * @author mogetutu
	 * @access public
	 */
	public function recent($limit = '10')
	{
		$this->db->order_by('posts.id','DESC')->limit($limit);
		return $this;
	}
	/**
	 * Get items that are live on the site
	 * @author mogetutu
	 * @acces public
	 */
	public function live()
	{
		$this->db->where('post_status','LIVE');
		return $this;
	}

	public function user()
	{
		$this->db->join('users','users.id = posts.user_id','left');
		return $this;
	}

	public function with_order_details()
	{
		$this->db->join('order_details','posts.id = order_details.post_id','left');
		return $this;
	}

	public function match_products()
	{
		$this->db->join('products','products.id = posts.product_id','left');
		return $this;
	}

	public function product($product)
	{
		if($product)
		{
			$this->db->like('product_name', $product);
		}
		return $this;
	}

	public function with_location()
	{
		$this->db->join('locations','locations.id = users.location_id','left');
		return $this;
	}

	public function status($status)
	{
		$status = ($status === 'approved') ? true : false ;
		$this->db->where('approved_product_weight', $status);
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
		return $this;
	}

	public function group_by($column)
	{
		$this->db->group_by($column);
		return $this;
	}

	public function posts_with($user, $status)
    {
		$this->db->select('product_id,product_name,sum(approved_product_weight) as total_weight, count(product_id) as entries,weight_unit,posts.created_at,posts.updated_at, approved_product_weight, sum(product_weight) as total_product_weight');
    	if ($status)
    	{
    		$this->post->status($status);
    	}
    	$this->post->join('users')->join('products');
    	$this->db->where('user_id', $user);
    	return $this;
    }

	public function aggregated_product($aggregator, $weeknumber = null, $status = null)
	{
		$this->db->select('product_id,product_name,sum(approved_product_weight) as total_weight, count(product_id) as entries,weight_unit,posts.created_at,posts.updated_at, approved_product_weight, sum(product_weight) as total_product_weight');
		$this->db->where('aggregator', $aggregator);
		if($weeknumber)
		{
			$this->db->where("DATE_FORMAT(created_at, '%V') =", $weeknumber);
		}
		if($status)
		{
			$this->post->status($status);
		}
		$this->post->join('users')->join('products');
		$this->db->order_by('posts.created_at','DESC');
		$this->post->group_by('product_id');
		return $this;
	}

	public function update_weight($id, $weight)
	{
		$this->post->update($id, array('updated_by' => $this->current_user, 'approved_product_weight' => $weight));
		return $this;
	}
	/**
	 * Get Week Numbers from Posts
	 */
	public function get_week_numbers()
	{
		for ($week = 1; $week < 53; $week++)
		{
			$weeks[$week] = $week;
		}
		return $weeks;
	}

}