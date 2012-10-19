<?php if (! defined('BASEPATH')) exit('No direct script access');

class Planting_plan_model extends MY_Model
{
    public $before_create = array('created_at','updated_at');
    public $before_update = array('updated_at');

    function __construct()
    {
        parent::__construct();
    }
    // Get planted or harvested crop
    function status($status)
    {
        $status = ($status==='harvested') ? 1 : 0 ;
        $this->db->where('harvested', $status);
        return $this;
    }

}