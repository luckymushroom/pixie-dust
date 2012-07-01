<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends MY_Model {

	public $before_update = array('date_modified');
	public $before_create = array('date_modified');
	public $after_get = array('get_author');

	public function __construct()
	{
		parent::__construct();
		
	}

	public function date_modified($post)
	{
		$post['date_modified'] = date('Y-m-d H:i:s');
		return $post;
	}

	public function category($category_name)
	{
		$category_id = $this->db->where('title',$category_name)->get('blog_categories')->row()->id;
		$this->db->where('blog_category_id',$category_id);
		return $this;
	}

	public function live()
	{
		$this->db->where('status', TRUE);
		return $this;
	}

	public function with_author()
	{
		$this->db->join('users', 'blogs.author_id = users.id');
		return $this;
	}

	public function get_author($result)
	{
		$result->author = $this->db->where('id',$result->author_id)->get('users')->row()->username;
		return $result;
	}

}

/* End of file blog_model.php */
/* Location: ./application/models/blog_model.php */