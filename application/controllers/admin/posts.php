<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Copyright (c) 2012 MFARM LTD.
 * All rights reserved.
 *
 * @package     Posts Module
 * @author      isaak mogetutu <imogetutu@gmail.com>
 * @copyright   2012 MFARM LTD.
 * @link        http://mfarm.co.ke
 * @version     @@PACKAGE_VERSION@@
 */
class Posts extends MY_Controller
{
	protected $models = array( 'post','product','price','user' );

	public function __construct()
	{
	   parent::__construct();
	   $this->ion_auth->logged_in_check();
	}
	/**
	 * @author isaak mogetutu <imogetutu@gmail.com>
	 * List latest user posts
	 * @return array of posts
	 */
	public function index( $status = null )
	{
		$columns = 'posts.*,product_name,username,phone';
		// List Posts
		$this->data['posts'] = $this->post->select($columns)->user()->status($status)->match_products()->order_by('posts.id','desc')->get_all();
	}

	public function show($id)
	{
		$this->data['username'] = $this->user->get($id)->username;
		if($this->ion_auth->profile()->is_aggregator)
		{
			$this->view = 'admin/posts/aggregated';
			$this->data['posts'] = $this->post->aggregated_product()->get_many_by('aggregator',$id);
		}
		else
		{
			$this->view = 'admin/posts/index';
			self::index();
		}
	}

	public function show_many($id,$product_id)
	{
		$columns = 'posts.*,product_name,username,phone';
		$this->data['posts'] = $this->post->select($columns)->user()->match_products()->get_many_by(array('aggregator'=>$id,'product_id'=>$product_id));
	}

	public function create_new()
	{
		$products = $this->product->dropdown('product_name');
		$this->data['products'] = $products;
	}

	public function price_feed($product_id, $limit = 5)
	{
		$this->view = false;
		$product = $this->price->price_feed($product_id,$limit)->get_all();
		echo json_encode($product);
	}
	/**
	 * @author isaak mogetutu <imogetutu@gmail.com>
	 * Save / Update post for prodcuts
	 * @param  int $post_id posting number
	 * @return $post_id insert_id()
	 */
	public function edit($post_id = '')
	{
		$columns = 'posts.*,product_name,product_id';
		$this->data['products'] = $this->product->dropdown('product_name');
		if($post_id)
		{
			$this->data['post'] = $this->post->select($columns)->match_products()->get_by('posts.id',$post_id);
			// $this->data['photos'] = $this->photo->get_many_by('post_id',$post_id);
			if($this->input->post())
			{
				// Update existing Post
				$update = $this->post->update($post_id,$this->input->post());
				if($this->db->affected_rows())
				{
					$this->session->set_flashdata('message','Post had been Updated!');
					redirect("admin/posts/edit/{$post_id}");
				}
				else
				{
					$this->session->set_flashdata('message','Nothing to update here!');
				}
			}
		}
		else
		{
			$_POST['delivery_date'] = ($this->input->post('delivered', TRUE) == 0) ? 0 : $this->input->post('delivery_date', TRUE) ;
			if($this->input->post())
			{
				// Insert new Post
				$_POST['user_id'] = $this->current_user;
				$add = $this->post->insert($this->input->post());
				if($add)
				{
					$this->session->set_flashdata('message','New Post Created');
					redirect('admin/posts/edit/'.$add);
				}
			}

		}
	}
	/**
	 * delete post by id
	 * @author isaak mogetutu <imogetutu@gmail.com>
	 * @param  int $post_id post id
	 * @return void
	 */
	public function delete_post($post_id)
	{
		if($this->post->delete($post_id))
		{
			$this->session->set_flashdata('message','Your Post has been deleted');
			redirect('admin/posts/index');
		}
		else
		{
			$this->session->set_flashdata('message','Your Post has NOT been deleted');
			redirect('admin/posts/','refresh');
		}
	}

	/**
	 * Update of post(s) states from live to pending for erroneous records
	 * @author mogetutu
	 * @access public
	 * @return boolean
	 */
	public function change_status()
	{
		$this->view = false;
		$status = $this->input->post('submit');
		$primary_values = $this->input->post('status');
		$status = ($status == 'Make Pending') ? array('post_status' => 'PENDING') : array('post_status' => 'LIVE');

		// update records
		if($primary_values !== null)
		{
			if($this->post->update_many($primary_values, $status) AND $this->db->affected_rows())
			{
				$this->session->set_flashdata('message','Record(s) Updated');
				redirect('admin/posts/index/');
			}
			else
			{
				$this->session->set_flashdata('message','Oops something went wrong. Please Try Again.');
				redirect('admin/posts/');
			}
		}
		else
		{
			$this->session->set_flashdata('message','Oops Nothing Selected. Please Try Again.');
			redirect('admin/posts/');
		}
	}
	/**
	 * Upload photo for a post on the site
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @param $post_id int
	 * @return void
	 */
	public function upload_photo($post_id)
	{
		//upload and update the file
		$config['upload_path'] = './media/crops/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = true;
		$config['remove_spaces'] = true;
		//$config['max_size']   = '100';// in KB

		$this->load->library('upload', $config);
		if($_FILES['photo']['error'] == 0)
		{
			if ( ! $this->upload->do_upload('photo'))
			{
			    $this->session->set_flashdata('message', $this->upload->display_errors());
			    redirect('admin/posts/edit/'.$post_id);
			}
			else
			{
			    //Image Resizing
			    $config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
			    $config['maintain_ratio'] = true;
			    $config['width'] = 160;
			    $config['height'] = 120;
				$this->load->library('image_lib', $config);
				if ( ! $this->image_lib->resize())
				{
			        $this->session->set_flashdata('message', $this->image_lib->display_errors());
			    }
			    // Photo data array
			    $photo_data = array('post_photo'=>$this->upload->file_name);
			    $this->post->update($post_id, $photo_data);
			    //Need to update the session information if email was changed
			    $this->session->set_flashdata('message', 'Your Photo has been Uploaded!');
			    redirect('admin/posts/edit/'.$post_id);
			}
		}
		else
		{
			$this->session->set_flashdata('message', $this->upload->display_errors());
			redirect('admin/posts/edit/'.$post_id);
		}
	}

	public function delete_photo($post_id, $photo_id)
	{
		if($this->post->update($post_id,array('post_photo'=>'default-thumb.gif')))
		{
			$this->session->set_flashdata('message','Your Photo has been deleted');
			redirect('admin/posts/edit/'.$post_id);
		}
		else
		{
			$this->session->set_flashdata('message','Ooops Something went wrong!');
			redirect('admin/posts/edit/'.$post_id);
		}
	}
	// Filter for the posting by status
	public function status($status = '')
	{
		$this->view = 'admin/posts/index';
		$columns = 'posts.*,product_name,username,phone';
		$this->data['posts'] = $this->post->select($columns)->user()->status($status)->match_products()->order_by('posts.id','desc')->get_all();
	}
}

/* End of file Posts.php */
/* Location: ./application/controllers/posts.php */