<?php if (! defined('BASEPATH')) exit('No direct script access');

class Incoming_text_model extends MY_Model {

	public $before_create = array('date_created');
	protected $soft_delete = TRUE;

	function __construct()
	{
		parent::__construct();
	}

	function date_created($post)
	{
		$post['date_created'] = date('Y-m-d H:i:s'); return $post;
	}

	public function since($date_range)
	{
		$this->db->where('date_created >= ', "'".$date_range."'", FALSE);
		return $this;
	}

	public function by_keyword($keyword)
	{
		if($keyword) 
		{
			$where = "SUBSTRING_INDEX( `message` ,' ', 1 ) like '%".$keyword."%'";
			$this->db->where($where);
			return $this;
		}
	}

	public function today()
	{
		$today = date('Y-m-d');
		$this->db->where('date(date_created)', $today);
		return $this;
	}

    public function filter($filter = array())
    {
        $date_range = (in_array('date_created', array_keys($filter))) ? $filter['date_created'] : 'Today';
        $keyword    = (in_array('message', array_keys($filter))) ? $filter['message'] : false;
        if($date_range != 'Today')
        {
            $date_range = '-'.str_replace('-', ' ', $date_range);
        }
        $date_range = date('Y-m-d H:i:s',strtotime($date_range));
        if($date_range && $keyword)
            return $this->incoming_text->since($date_range)->by_keyword($keyword);
        if($date_range)
            return $this->incoming_text->since($date_range);
        if($keyword)
            return $this->incoming_text->by_keyword($keyword);
    }

    public function unique_numbers()
    {
        $this->db->select('distinct(number), count(number) as entries', false);
        $this->db->where(array('number !=' => 0, 'number !=' => ''));
        $this->db->group_by('number');
        return $this;
    }

}