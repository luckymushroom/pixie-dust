<?php if (! defined('BASEPATH')) exit('No direct script access');

class Location_model extends MY_Model 
{

	function __construct()
	{
		parent::__construct();
	}

	function like($match)
	{
		$this->db->like($match);
		return $this;
	}

	public function set_location($location)
    {
        $location_id = $this->db->like('location_name',$location)->or_like('location_alias',$location)->get('locations')->row()->id;
        $location_id = ($location_id) ? $location_id : self::new_location($location);
        return $location_id;
    }

    public function new_location($location)
    {
        $location_details = array( 'location_name' => $location, 'location_alias' => $location );
        $this->db->insert('locations', $location_details);
        return $this->db->insert_id();
    }

    public function current_markets()
    {
        return array('43'=>'Nairobi','44'=>'Mombasa','45'=>'Kisumu','55'=>'Eldoret','56'=>'Kitale');
    }

}