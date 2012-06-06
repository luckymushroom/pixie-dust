<?php if (! defined('BASEPATH')) exit('No direct script access');

class Order_detail_model extends MY_Model {

	public $after_get = array('product_name','dateformatting');
	public $before_create = array('date_modified');
	//php 5 constructor
	function __construct()
	{
		parent::__construct();
	}

	public function product_name($result)
	{
		$result->post_id = $this->db->select('product_name')->join('posts', 'posts.product_id = products.id')
		->where('posts.id', $result->post_id)->get('products')->row();
		return $result;
	}

	public function my_bids($post_ids)
	{
		$this->db->where_in('post_id',$post_ids);
		return $this;
	}

	public function date_modified($post)
	{
		$post['date_modified'] = date('Y-m-d H:i:s');
		return $post;
	}

	public function dateformatting($result)
	{
		$result->date_modified = date('d-m-Y H:i:s');
		return $result;
	}

}