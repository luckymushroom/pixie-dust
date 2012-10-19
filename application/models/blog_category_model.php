<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_category_model extends MY_Model {

	public $before_create = array('date_modified');
	public $before_update = array('date_modified');
	protected $soft_delete = TRUE;

	public function __construct()
	{
		parent::__construct();

	}

	public function date_modified($category)
	{
		$category['date_modified'] = date('Y-m-d H:i:s');
		return $category;
	}

}

/* End of file blog_category_model.php */
/* Location: ./application/models/blog_category_model.php */