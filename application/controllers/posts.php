<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Copyright (c) 2012 MFARM LTD.
 * All rights reserved.
 *
 * @package     POSTS
 * @author      isaak mogetutu <imogetutu@gmail.com>
 * @copyright   2012 MFARM LTD.
 * @link        http://mfarm.co.ke
 * @version     @@PACKAGE_VERSION@@
 */
class Posts extends MY_Controller
{
	// Load models
	protected $models = array('post','product','photo');
	/**
	 * construct, Do your magic here
	 */
	public function __construct()
	{
	   parent::__construct();
	   $this->ion_auth->logged_in_check();
	   $this->data['products'] = $this->product->dropdown('product_name');
	}
	/**
	 * @author isaak mogetutu <imogetutu@gmail.com>
	 * List latest user posts
	 * @return array of posts
	 */
	public function index()
	{
		// List Posts
		$this->data['posts'] = $this->post->deleted()->get_many_by('user_id',$this->current_user);
	}

	public function new_post() {}

	public function price_feed($crop=44)
	{
		$this->view = false;
		$commodity = $this->post->price_feed($crop);
		echo json_encode($commodity);
	}
	/**
	 * @author isaak mogetutu <imogetutu@gmail.com>
	 * Save / Update post for prodcuts
	 * @param  int $post_id posting number
	 * @return $post_id insert_id()
	 */
	public function save_post($post_id = '')
	{
		$post_id = $this->uri->segment(3);
		// Check is there is post id to update else insert new record
		if($post_id)
		{
			$this->data['post'] = $this->post->get_by('posts.id',$post_id);
			$this->data['photos'] = $this->photo->get_many_by('post_id',$post_id);
			if($this->input->post())
			{
				// Update existing Post
				$_POST['date_modified'] = date('Y-m-d H:i:s');
				$update = $this->post->update($post_id,$this->input->post());
				if($this->db->affected_rows())
				{
					$this->session->set_flashdata('message','Post had been Updated!');
					redirect('/posts/save_post/'.$post_id);
				}
				else
				{
					$this->session->set_flashdata('message','Nothing to update here!');
				}
			}
		}
		else
		{
			if($this->input->post())
			{
				// Insert new Post
				$_POST['date_added'] = date('Y-m-d H:i:s');
				$_POST['user_id'] = $this->current_user;
				$add = $this->post->insert($this->input->post());
				if($add)
				{
					$this->session->set_flashdata('message','New Post Created');
					redirect('/posts/save_post/'.$add);
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
			redirect('posts/index');
		}
		else
		{
			$this->session->set_flashdata('message','Your Post has NOT been deleted');
			redirect('posts/','refresh');
		}
	}

	public function upload_photo($post_id)
	{
		//upload and update the file
		$config['upload_path'] = './media/crops/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['overwrite'] = true;
		$config['remove_spaces'] = true;
		//$config['max_size']   = '100';// in KB

		$this->load->library('upload', $config);
		if($_FILES['photo']['error'] == 0)
		{
			if ( ! $this->upload->do_upload('photo'))
			{
			    $this->session->set_flashdata('message', $this->upload->display_errors());
			    redirect('posts/save_post/'.$post_id);
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
			    $photo_data = array(
			    	'post_id'=>$post_id,
			    	'photo'=>$this->upload->file_name,
			    	'caption'=>$this->input->post('caption',TRUE)
			    	);
			    $this->photo->insert($photo_data);
			    //Need to update the session information if email was changed
			    $this->session->set_flashdata('message', 'Your Photo has been Uploaded!');
			    redirect('posts/save_post/'.$post_id);
			}
		}
		else
		{
			$this->session->set_flashdata('message', $this->upload->display_errors());
			redirect('posts/save_post/'.$post_id);
		}
	}

	public function delete_photo($post_id, $photo_id)
	{
		if($this->photo->delete($photo_id))
		{
			$this->session->set_flashdata('message','Your Photo has been deleted');
			redirect('posts/save_post/'.$post_id);
		}
		else
		{
			$this->session->set_flashdata('message','Ooops Something went wrong!');
			redirect('posts/save_post/'.$post_id);
		}
	}
	// Filter for the posting by status
	public function status($status = '')
	{
		// Reuser index view but reload items by status
		$this->view = 'posts/index';
		$this->data['posts'] = $this->post->status($status)->get_many_by('user_id',$this->current_user);
	}


}

/* End of file Posts.php */
/* Location: ./application/controllers/posts.php */