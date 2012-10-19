<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends MY_Model
{

	public $before_create = array( 'created_at', 'updated_at' );
    public $before_update = array( 'updated_at' );
	protected $soft_delete = TRUE;

	public function __construct()
	{
		parent::__construct();

	}
	/**
	 * Join Category of blog posts
	 * @author mogetutu
	 * @param $category_name Name of the blog category and get id
	 */
	public function category($category_name)
	{
		$category_id = $this->db->where('title',$category_name)->get('blog_categories')->row()->id;
		$this->db->where('blog_category_id',$category_id);
		return $this;
	}
	/**
	 * Scope : Live posts
	 */
	public function live()
	{
		$this->db->where('status', TRUE);
		return $this;
	}
	/**
	 * Join users to grab the author name
	 * @author mogetutu
	 */
	public function with_author()
	{
		$this->db->join('users', 'blogs.user_id = users.id');
		return $this;
	}
	/**
	 * A Related posts to current blog post
	 * @author mogetutu
	 * @param $category blog_category_id
	 * @param $slug blog slug
	 */
	public function related_posts($category, $slug)
	{
		$attributes = array(
			'blog_category_id' => $category,
			'slug !=' => $slug
			);
		$this->db->where($attributes);
		return $this;
	}
	/**
	 * Get Todays Posts
	 * @author mogetutu
	 */
	public function todays_posts()
	{
		$this->db->where('DATE_FORMAT(updated_at, "%d-%m-%Y") = ', date('d-m-Y'));
		return $this;
	}

}

/* End of file blog_model.php */
/* Location: ./application/models/blog_model.php */