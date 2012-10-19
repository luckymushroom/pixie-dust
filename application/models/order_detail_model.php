<?php if (! defined('BASEPATH')) exit('No direct script access');

class Order_detail_model extends MY_Model {

	public $before_create = array( 'created_at' );
    public $before_update = array( 'created_at', 'updated_at' );
    public $belongs_to = array( 'post' );

	function __construct()
	{
		parent::__construct();
	}

	public function select($columns)
	{
		$this->db->select($columns);
		return $this;
	}

	public function user()
	{
		$this->db->join('users','users.id = posts.user_id','left');
		return $this;
	}

	public function product()
	{
		$this->db->join('products','products.id = posts.product_id','inner');
		return $this;
	}	

	public function post()
	{
		$this->db->join('posts','posts.id = order_details.post_id','left');
		return $this;
	}

}