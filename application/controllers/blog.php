<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MY_Controller {

	protected $models = array('blog','blog_category');
	public function __construct()
	{
		parent::__construct();
		$this->layout = ($this->ion_auth->is_admin()) ? 'layouts/admin_template' : 'layouts/application' ;
	}
	/**
	 * Load the blog page
	 */
	public function index()
	{
		$this->layout = 'layouts/application' ;
		// Blog will be here
		$this->data['page_title'] = 'Our Thoughts';
		$this->data['page_subtitle'] = 'Sometimes Great Ideas Come From a Story';
		$this->data['posts'] = $this->blog->deleted()->live()->get_all();
	}

	public function post($slug='')
	{
		$this->layout = 'layouts/application' ;
		$this->data['page_title'] = 'Our Thoughts';
		$this->data['page_subtitle'] = 'Sometimes Great Ideas Come From a Story';
	}
	/**
	 * Add new blog post
	 * @access public
	 * @author mogetutu
	 * @param $array post post array
	 */
	public function add_post()
	{

	}

	public function update_post($id)
	{
		$this->layout = 'layouts/admin_template' ;
		$this->data['post'] = $this->blog->get($id);
	}

	public function save_post($id = '')
	{
		$post = array(
			'title'            => $this->input->post('title', TRUE),
			'blog_category_id' => $this->input->post('blog_category_id', TRUE),
			'intro'            => $this->input->post('intro', TRUE),
			'body'             => $this->input->post('content', TRUE),
			'status'           => $this->input->post('status', TRUE)
			);
		if ($id) 
		{
			$this->blog->update($id, $post);
			if($this->db->affected_rows())
			{
				$this->session->set_flashdata('message','Blog Post updated!');
				redirect('blog/manage_posts', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('message','Oops! Problem updating Blog Post!');
				redirect('blog/add_post', 'refresh');
			}
		}
		else
		{
			if($this->blog->insert($post))
			{
				$this->session->set_flashdata('message','New Blog Post added!');
				redirect('blog/manage_posts', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('message','Oops! Problem adding new Blog Post!');
				redirect('blog/add_post', 'refresh');
			}
		}

	}
	
	/**
	 * Manage Blog Posts and Blog Categories
	 * @access public
	 * @author mogetutu
	 * @param $string section blog/blog_categories
	 */
	public function manage($section = 'blog')
	{
		$this->layout = 'layouts/admin_template' ;
	}
	/**
	 * Load Blogs and Categories
	 * @access public
	 * @author mogetutu
	 * @param $string category name
	 */
	public function manage_posts($category = '')
	{
		$this->layout = 'layouts/admin_template' ;
		$blogs = ($category) ? $this->blog->category($category)->deleted()->get_all() : $this->blog->deleted()->get_all();
		$this->data['blogs'] = $blogs;
		$this->data['categories'] = $this->blog_category->deleted()->get_all();
	}

}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */