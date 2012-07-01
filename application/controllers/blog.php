<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MY_Controller {

	protected $models = array('blog','blog_category','post');
	public function __construct()
	{
		parent::__construct();
		$this->load->library('image_lib');
		$this->data['classifieds'] =$this->post->live()->with_order_details()->match_products()->with_photos()->with_location()->order_by('posts.id','desc')->limit(3)->get_all();
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
		// Pagination
		$this->load->library('pagination');

		$config['base_url'] = base_url('/blog/page/');
		$config['total_rows'] = count($this->blog->live()->deleted()->get_all());
		$config['per_page'] = 4;

		$this->pagination->initialize($config);

		// List all blog posts
		$this->data['posts'] = $this->blog->deleted()->live()->order_by('blogs.id','desc')->limit($config['per_page'], $this->uri->segment(3))->get_all();
	}

	public function post($slug)
	{
		$this->layout = 'layouts/application' ;
		$this->data['page_title'] = 'Our Thoughts';
		$this->data['page_subtitle'] = 'Sometimes Great Ideas Come From a Story';
		$this->data['post'] = $this->blog->get($slug);
	}
	/**
	 * Add new blog post
	 * @access public
	 * @author mogetutu
	 * @param $array post post array
	 */
	public function add_post()
	{
		// Get all categories
		// create and empty record and redirect
		$post = array('title' => 'Draft Post');
		$this->blog->insert($post);
		$post_id = $this->db->insert_id();
		if($post_id)
			redirect("blog/update/post/{$post_id}", 'refresh');
	}

	public function update_post($id)
	{
		$this->data['post'] = $this->blog->get($id);
		$this->data['categories'] = $this->blog_category->dropdown('id','title');
	}

	public function save_post($id = '')
	{
		$slug = str_replace(' ', '-', strtolower($this->input->post('title', TRUE)));
		$post = array(
			'title'            => $this->input->post('title'),
			'author_id'        => $this->current_user,
			'slug'             => $slug,
			'blog_category_id' => $this->input->post('blog_category_id'),
			'intro'            => $this->input->post('intro'),
			'body'             => $this->input->post('body'),
			'status'           => $this->input->post('status')
		);
		if ($id) 
		{
			$update = $this->blog->update($id, $post);
			if($update && $this->db->affected_rows())
			{
				$this->session->set_flashdata('message','Blog Post updated!');
				redirect("blog/update/post/{$id}", 'refresh');
			}
			else
			{
				$this->session->set_flashdata('message','Oops! Problem updating Blog Post!');
				redirect("blog/update/post/{$id}", 'refresh');
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
	}
	/**
	 * Load Blogs and Categories
	 * @access public
	 * @author mogetutu
	 * @param $string category name
	 */
	public function manage_posts($category = '')
	{
		$blogs = ($category) ? $this->blog->category($category)->deleted()->get_all() : $this->blog->deleted()->get_all();
		$this->data['blogs'] = $blogs;
		$this->data['categories'] = $this->blog_category->deleted()->get_all();
	}

	public function upload_photo($blog_id)
	{
		//upload and update the file
		$config['upload_path'] = './media/blog_photos/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['overwrite'] = TRUE;
		$config['remove_spaces'] = TRUE;
		//$config['max_size']   = '100';// in KB

		$this->load->library('upload', $config);
		if($_FILES['photo']['error'] == 0)
		{
			if ( ! $this->upload->do_upload('photo') )
			{
			    $this->session->set_flashdata('message', $this->upload->display_errors());
			    redirect("blog/update/post/{$blog_id}");
			}
			else
			{
			    //Image Resizing
			    $config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
			    $config['maintain_ratio'] = true;
			    $config['width'] = 200;
			    $config['height'] = 230;

				$this->image_lib->clear();
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

				if ( ! $this->image_lib->resize())
				{
			        $this->session->set_flashdata('message', $this->image_lib->display_errors());
			    }

			    // Create Thumbnail
				$config['source_image']   = $this->upload->upload_path.$this->upload->file_name;
				$config['create_thumb']   = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width']          = 125;
				$config['height']         = 107;

				$this->image_lib->clear();
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

				// Blog Photo and thumbnail
			    $photo_data = array(
					'image'     => $this->upload->file_name,
					'thumbnail' => substr($this->upload->file_name, 0, -4)."_thumb".$this->upload->file_ext
			    	);
			    $this->blog->update($blog_id,$photo_data);
			    //Need to update the session information if email was changed
			    $this->session->set_flashdata('message', 'Your Photo has been Uploaded!');
			    redirect("blog/update/post/{$blog_id}");
			}
		}
		else
		{
			$this->session->set_flashdata('message', $this->upload->display_errors());
			redirect('posts/save_post/'.$post_id);
		}
	}
	/**
	 * Delete Photo
	 * @author mogetutu
	 * @access public
	 * @param $post_id int
	 * @param $photo_id int
	 */
	public function delete_photo($post_id)
	{
		$photo_data = array( 
			'thumbnail' =>'', 
			'image'     =>''
			);
		$this->blog->update($post_id, $photo_data);
		if($this->db->affected_rows())
		{
			$this->session->set_flashdata('message','Your Photo has been deleted');
			redirect('blog/update/post/'.$post_id);
		}
		else
		{
			$this->session->set_flashdata('message','Ooops Something went wrong!');
			redirect('blog/update/post/'.$post_id);
		}
	}

}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */