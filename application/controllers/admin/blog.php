<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Copyright (c) 2012 MFARM LTD.
 * All rights reserved.
 *
 *
 * @package     M-Farm Web Application
 * @subpackage  Blog Module
 * @author      mogetutu <imogetutu@gmail.com>
 * @copyright   Copyright (c) 2012, Mfarm Limited <http://mfarm.co.ke>
 * @link        http://mfarm.co.ke
 * @version     1.0
 */
class Blog extends MY_Controller
{

	protected $models = array('blog','blog_category','post','crop_report');
	public function __construct()
	{
		parent::__construct();
		$this->load->library('image_lib');
		$this->ion_auth->logged_in_check();
	}
	/**
	 * Load Blogs and Categories
	 */
	public function index($category = '')
	{
		$this->ion_auth->logged_in_check();
		$blogs = ($category) ?
		$this->blog->category($category)->get_all() : $this->blog->order_by('id','desc')->get_all();
		$this->data['blogs'] = $blogs;
		$this->data['categories'] = $this->blog_category->get_all();
		$this->data['post_count'] = count($blogs);
		$this->data['post_count_today'] = count($this->blog->live()->todays_posts()->get_all());
	}
	/**
	 * Add new blog post
	 */
	public function add_post()
	{
		$this->view = 'admin/blog/edit';
		$this->data['categories'] = $this->blog_category->dropdown('title');
	}
	/**
	 * Save A New or Existing Blog post
	 */
	public function edit($id = '')
	{
		$this->data['post'] = $this->blog->get($id);
		$this->data['categories'] = $this->blog_category->dropdown('title');
		$this->form_validation->set_rules('title', 'Blog Title', 'required|trim');
		$slug = strtolower(url_title($this->input->post('title', TRUE), '-', TRUE));
		$post = array(
			'title'            => $this->input->post('title'),
			'user_id'          => $this->current_user,
			'slug'             => $slug,
			'blog_category_id' => $this->input->post('blog_category_id'),
			'intro'            => $this->input->post('intro'),
			'body'             => $this->input->post('body'),
			'status'           => $this->input->post('status')
		);
		if ($id)
		{
			if($this->input->post() && $this->form_validation->run())
			{
				// Update
				$update = $this->blog->update($id, $post);
				if($this->db->affected_rows())
				{
					$this->session->set_flashdata('message','Blog Post updated!');
					redirect("admin/blog/edit/{$id}");
				}
				$this->session->set_flashdata('message','Make changes then update');
				redirect("admin/blog/edit/{$id}");
			}

		}
		else
		{
			if($this->input->post() && $this->form_validation->run())
			{
				$post_id = $this->blog->insert($post);
				$this->session->set_flashdata('message','New Blog Post added!');
				redirect("admin/blog/edit/{$post_id}");
			}
			$this->session->set_flashdata('message','Oops! Something went wrong.');
			redirect('admin/blog/add_post/');
		}
	}

	public function upload_photo($blog_id='')
	{
		$this->ion_auth->logged_in_check();
		if(!$blog_id)
		{
			redirect('admin/blog/add_post/','refresh');
			$this->session->set_flashdata('message','Save Post First, Then Upload photo');
		}
		//upload and update the file
		$config['upload_path'] = './media/blog_photos/';
		$config['allowed_types'] = 'jpeg|gif|jpg|png';
		$config['overwrite'] = TRUE;
		$config['remove_spaces'] = TRUE;
		//$config['max_size']   = '100';// in KB

		$this->load->library('upload', $config);
		if($_FILES['photo']['error'] == 0)
		{
			if ( ! $this->upload->do_upload('photo') )
			{
			    $this->session->set_flashdata('message', $this->upload->display_errors());
			    redirect("admin/blog/edit/{$blog_id}");
			}
			else
			{
				$photo_info = $this->upload->data();
			    //Image Resizing
			    $config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
			    $config['maintain_ratio'] = true;
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
					'thumbnail' => $photo_info['raw_name'] . '_thumb' . $photo_info['file_ext']
			    	);
			    $this->blog->update($blog_id,$photo_data);
			    //Need to update the session information if email was changed
			    $this->session->set_flashdata('message', 'Your Photo has been Uploaded!');
			    redirect("admin/blog/edit/{$blog_id}");
			}
		}
		else
		{
			$this->session->set_flashdata('message', $this->upload->display_errors());
			redirect("admin/blog/edit/{$blog_id}");
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
		$this->ion_auth->logged_in_check();
		$photo_data = array('thumbnail' =>'', 'image' =>'');
		$this->blog->update($post_id, $photo_data);
		if($this->db->affected_rows())
		{
			$this->session->set_flashdata('message','Your Photo has been deleted');
			redirect("admin/blog/edit/{$post_id}");
		}
		else
		{
			$this->session->set_flashdata('message','Ooops Something went wrong!');
			redirect("admin/blog/edit/{$post_id}");
		}
	}


	public function add_category()
	{
		$this->blog_category->insert(array('title'=>$this->input->post('title', TRUE)));
		if($this->db->insert_id())
		{
			$this->session->set_flashdata('message', 'Blog Category Added');
			redirect('admin/blog/');
		}
		$this->session->set_flashdata('message', 'Ooops! Something went wrong!');
		redirect('admin/blog/');
	}

	public function delete_category($id)
	{
		if($this->blog_category->update($id,array('deleted'=>1)))
		{
			$this->session->set_flashdata('message', 'Blog Category Deleted');
			redirect('admin/blog/');
		}
		$this->session->set_flashdata('message', 'Oops! Category NOT Deleted');
		redirect('admin/blog/');
	}

}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */