<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crop_report_model extends MY_Model
{
	public $belongs_to = array( 'location', 'user', 'product' );
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('inflector');
	}

	public function select($columns)
	{
		$this->db->select($columns);
		return $this;
	}

	public function match($table)
	{
		$column = singular($table);
		$this->db->join($table,"{$table}.id = crop_reports.{$column}_id",'left');
		$this->db->where("{$table}.deleted", 0);
		return $this;
	}

	public function report_date($start_date, $end_date)
	{
		$this->db->where('`created_at` BETWEEN "'.$start_date.'" and "'.$end_date.'"', NULL, FALSE);
		return $this;
	}

	public function location($location_id)
	{
		$this->db->where('crop_reports.location_id', $location_id);
		return $this;
	}

	public function product($product_id)
	{
		$this->db->where('crop_reports.product_id', $product_id);
		return $this;
	}

	public function filter($filter = array())
	{
		$start_date = $filter['year'].'-'.$filter['month'].'-'.$filter['day'];
		$end_date   = $filter['to_year'].'-'.$filter['to_month'].'-'.$filter['to_day'];
		$start_date = ($start_date) ? $start_date : date('Y-m-d');
		$end_date = ($end_date) ? $end_date : date('Y-m-d');
		$location   = ($filter['location'])? $filter['location'] : null ;
		$product   = ($filter['product'])? $filter['product'] : null ;
		if($end_date < $start_date)
		{
			$this->report_date($start_date, $start_date);
		}
		else
		{
			$this->report_date($start_date, $end_date);
		}
		if(isset($location))
		{
			$this->location($location);
		}
		if(isset($product))
		{
			$this->product($product);
		}

		return $this;
	}

}

/* End of file crop_report_model.php */
/* Location: ./application/models/crop_report_model.php */