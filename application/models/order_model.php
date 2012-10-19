<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends MY_Model
{
	public $after_get = array('get_process_name');
	protected $soft_delete = TRUE;
	public function __construct()
	{
	   parent::__construct();
	   //Do your magic here
	}

	public function my_orders()
	{
		$this->db->where('orders.user_id', $this->current_user);
		return $this;
	}


	/**
	 * Get unprocess order id
	 * @param  int $user_id current user session id
	 * @return int order id
	 */
	public function get_order_id($user_id)
	{
		$this->db->select('id');
		$this->db->where('user_id', $user_id);
		$this->db->where('process_step_id =', 1);
		$this->db->where('deleted', 0);
		$id = $this->db->get('orders')->row();
		return $id->id;
	}

	public function get_process_name($result)
	{
		$result->process_step_id = $this->db->select('process_name')->get_where('process_steps', array('id'=>$result->process_step_id))->row();
		return $result;
	}

	public function status( $status )
	{
		if(isset($status))
		{
			$this->db->where('process_step_id', $status);
			return $this;
		}
	}
}