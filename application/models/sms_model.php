<?php if (! defined('BASEPATH')) exit('No direct script access');
// 
//  sms_model.php
//  application model
//  
//  Created by Team Mfarm on 2011-11-02.
//  Copyright 2011 __MFarm LTD__. All rights reserved.
// 

class Sms_model extends CI_Model
{

	public function __construct() 
	{
		parent::__construct();
	}
	
	/**
	 * get_crop_details
	 * @access public
	 * @param  string $crop crop name/alias
	 * @param  int $location location id
	 * @return array
	 */
	public function get_crop_details($crop,$location)
	{
		$this->db->select('products.id,product_name,crop_weight,crop_unit,crop_price,crop_date,
		location,location_name,locations.id');
		$this->db->join('products', 'prices.product_id = products.id');
		$this->db->join('locations', 'locations.id = prices.location_id');
		$this->db->where('crop_price >', 0);
		$this->db->where('crop_date', '(SELECT max(crop_date) from prices)',FALSE);
		$this->db->or_like('product_alias', $crop);
		$this->db->or_like('product_name', $crop);
		if (is_numeric($location))
		{ 
			$this->db->where('locations.location_id', $location); 
		}
		else
		{ 
			$this->db->like('location_alias', $location); 
		}
		$this->db->group_by('product_id,crop_date');
		$this->db->order_by('crop_date','DESC');
		$this->db->order_by('crop_price','DESC');
		$this->db->order_by('products.id','DESC');
		$response = $this->db->get('prices',4)->result();
		if ($response) 
		{
			return $response;
		}
		else 
		{
			return false;
		}
	}
	/**
	 * get_subscriber_details
	 * @access public
	 * @param  int $mobile_number subscribers mobile number
	 * @return array
	 */
	public function get_subscriber_details($mobile_number)
	{
		// Get susbcriber with the set mobile number
		$response = $this->db->like('phone',$mobile_number)->get('users', 1);
		if ($response) 
		{
			//Return the subscriber details
			return $response->row();
		}
		else 
		{
			//If not present return nothing
			return false;
		}
	}
	/**
	 * insert_sellers_details
	 * @param  array $data sellers details
	 * @return boolean
	 */
	public function add_post($data)
	{
		$query = $this->db->insert('posts', $data);
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	/**
	 * [insert_incoming_sms description]
	 * @param  string $message text message
	 * @param  date $date text date
	 * @param  int $phone mobilenumber
	 * @return boolean
	 */
	public function insert_incoming_sms($message,$date,$phone)
	{
		// Add incoming SMS into db and set flag to zero
		$sql="INSERT INTO incomingsms(message,date,mobilenumber,flag ) values('".$message."','".$date."','".$phone."','0')" ;
		$response = $this->db->query($sql);
		if ($response) 
		{
			//Return the SMS id for further processing
			return $this->db->insert_id();
		}
		else
		{
			return false;
		}
	}
	
	/**
	 * [update_incoming_sms description]
	 * @param  int $id unique sms id
	 * @return boolean
	 */
	public function update_incoming_sms($id)
	{
		$sql = "UPDATE incomingsms set flag = '1' where id = '".$id."'";
		$response = $this->db->query($sql);
		if ($response) {
			return true;
		}
		else {
			return false;
		}
	}
	
	/**
	 * [insert_new_subscriber description]
	 * @param  array $data user details
	 * @return boolean
	 */
	public function insert_new_subscriber($data)
	{
		$query = $this->db->insert('mfarm_subscribed', $data);
		if ($query)
		{
			return $this->db->insert_id();
		}
		else
		{
			return false;
		}
	}
	
	/**
	 * [insert_buy_details description]
	 * @param  array $data buyer details
	 * @return boolean
	 */
	public function insert_buy_details($data)
	{
		$query = $this->db->insert('offer_buyers',$data);
		if ($query) 
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
	
	//public function get all sms with flag as 0 || 1
	/**
	 * Get SMS's flagged as one or zero
	 * @param  array  $params 
	 * @return array
	 */
	public function get_sms_stats($params = array())
	{
		$flag = isset($params['request']);
		
		if(!$flag)
		{
			$this->db->order_by('date','DESC');
			$request = $this->db->get('incomingsms')->result();
		}	
		else
		{
			if (is_numeric($flag))
				$request = $this->db->query('SELECT * FROM incomingsms WHERE date = NOW() AND flag ="$flag"')->result();
			else
				$request = $this->db->query("SELECT * FROM (`incomingsms`) WHERE SUBSTRING_INDEX( `message` ,' ', 1 ) = '$flag' AND date = NOW()")->result();
		}


		return $request;
	}

	
	/**
	 * [get_todays_sms description]
	 * @return array
	 */
	public function get_todays_sms()
	{
		$today = date('Y-m-d');
		return $this->db->query('SELECT * FROM incomingsms WHERE date(date) = "'.$today.'"')->num_rows();
	}
	/**
	 * [location_finder description]
	 * @access public
	 * @param  int $location location name/aliase
	 * @return int location id
	 */
	public function get_location_id($location)
	{
		$this->db->or_like('location_name', $location);
		$this->db->or_like('location', $location);
		$this->db->or_like('location_aliase', $location);
		$location_id = $this->db->get('locations',1)->row()->location_id;
		if($location_id)
		{
			return $location_id;
		}
		else
		{
			$this->db->insert('locations', array('location_name'=>$location,'location'=>$location));
			$location_id = $this->db->insert_id();
			return $location_id;
		}
	}
}

/* End of file Sms_model.php */
/* Location: ./mfarm/models/Sms_model.php */