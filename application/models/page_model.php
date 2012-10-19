<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_model extends MY_Model
{
	protected $soft_delete = TRUE;

	public function __construct()
	{
		parent::__construct();

	}

	public function section($section_name)
	{
		$this->db->where('page', $section_name);
		return $this;
	}

}

/* End of file page_model.php */
/* Location: ./application/models/page_model.php */