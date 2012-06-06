<?php if (! defined('BASEPATH')) exit('No direct script access');

class Preorders extends MY_Controller
{
	protected $models = array('order','order_detail','post','photo');
	//php 5 constructor
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$orders = $this->order->my_orders($this->current_user)->get_all();
		foreach ($orders as $order) {
			$post_id = $order->post_id;
			$this->data['preorders'] = $this->get_posts($post_id);
		}
	}

	public function get_posts($post_id)
	{
		$this->db->select('orders.*,product_name,unit_price,photo,quantity,price');
		$this->db->where('posts.id', $post_id);
		$this->db->join('orders', 'orders.post_id = posts.id ');
		$this->db->join('order_details', 'order_details.order_id = orders.id','left');
		$this->db->join('photos', 'photos.post_id = posts.id');
		$this->db->join('products', 'products.id = posts.product_id');
		return $this->db->get('posts')->result();
		// return $this->post->filter_ids($post_ids)->get_all();
	}

	public function view_order($order_id)
	{
		// Order item
		$order =  $this->order->get($order_id);
		$this->data['order'] = $order;
		// Order Details
		$this->data['order_details'] = $this->order_detail->get_by('order_id',$order_id);
		// Post Details
		$this->data['post'] = $this->post->get($order->post_id);
		$this->data['photo'] = $this->photo->get_by('post_id',$order->post_id);

	}

}