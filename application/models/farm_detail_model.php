<?php if (! defined('BASEPATH')) exit('No direct script access');

class Farm_detail_model extends MY_Model
{
    public $before_create = array('created_at','updated_at');
    public $before_update = array('updated_at');

    function __construct()
	{
		parent::__construct();
	}

    public function aggregator($aggregator)
    {
        $users = $this->db->where('aggregator',$aggregator)->get('users')->result();
        foreach ($users as $key) {
            $user_ids[] = $key->id;
        }
        $this->db->where_in('user_id', $user_ids)->get('farm_details')->result();

        return $this;
    }

}