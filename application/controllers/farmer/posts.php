<?php if (! defined('BASEPATH')) exit('No direct script access');

class Posts extends MY_Controller {

    protected $models = array( 'post','product','price','user' );
    function __construct()
    {
        parent::__construct();
        $this->ion_auth->logged_in_check();
    }
    /**
     * List Farmer Posts
     * @return array
     */
    public function index()
    {
        $columns = 'posts.*,product_name,username,phone';
        $this->data['posts'] = $this->post->select($columns)->join('users')->join('products')->order_by('posts.id','desc')
                               ->get_many_by('user_id',$this->current_user);
    }

    public function show($id)
    {
        $this->data['posts'] = $this->post->join('users')->join('products')->get_many_by(array('user_id'=>$id));
    }

    public function create_new()
    {
        $products = $this->product->dropdown('product_name');
        $this->data['products'] = $products;
        $this->data['weight_unit'] = array('KGs'=>'KGs','Crates'=>'Crates');
    }
    public function edit($post_id)
    {
        $columns = 'posts.*,product_name,product_id';
        $this->data['products'] = $this->product->dropdown('product_name');
        $this->data['weight_unit'] = array('KGs'=>'KGs','Crates'=>'Crates');
        // Check is there is post id to update else insert new record
        if($post_id)
        {
            $this->data['post'] = $this->post->select($columns)->join('products')->get_by('posts.id',$post_id);
            // $this->data['photos'] = $this->photo->get_many_by('post_id',$post_id);
            if($this->input->post())
            {
                // Update existing Post
                $update = $this->post->update($post_id,$this->input->post());
                if($this->db->affected_rows())
                {
                    $this->session->set_flashdata('message','Post had been Updated!');
                    redirect("farmer/posts/edit/{$post_id}");
                }
                else
                {
                    $this->session->set_flashdata('message','Nothing to update here!');
                    redirect("farmer/posts/edit/{$post_id}");
                }
            }
        }
        else
        {
            $delivery_date = ($this->input->post('delivered', TRUE) == 0) ? '' : $this->input->post('delivery_date', TRUE) ;
            if($this->input->post())
            {
                // Insert new Post
                $additional_data = array(
                    'user_id'       => $this->current_user,
                    'contact'       => $this->user->get($this->current_user)->phone,
                    'delivery_date' => $delivery_date
                    );
                $post = array_merge($additional_data, $this->input->post());
                $post_id = $this->post->insert($post);
                if($post_id)
                {
                    $this->session->set_flashdata('message','New Post Created');
                    redirect("farmer/posts/edit/{$post_id}");
                }
            }

        }

    }
    public function delete_post($post_id)
    {
        if($this->post->delete($post_id))
        {
            $this->session->set_flashdata('message','Your Post has been deleted');
        }
        else
        {
            $this->session->set_flashdata('message','Your Post has NOT been deleted');
        }
        redirect('farmer/posts/','refresh');
    }

    /**
     * Upload photo for a post on the site
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
                redirect("posts/edit/{$post_id}");
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
                $this->post->update($post_id,$photo_data);
                //Need to update the session information if email was changed
                $this->session->set_flashdata('message', 'Your Photo has been Uploaded!');
                redirect('farmer/posts/edit/'.$post_id);
            }
        }
        else
        {
            $this->session->set_flashdata('message', $this->upload->display_errors());
            redirect("farmer/posts/edit/{$post_id}");
        }
    }
    // Delete photo
    public function delete_photo($post_id)
    {
        if($this->post->update($post_id,array('post_photo'=>'default-thumb.gif')))
        {
            $this->session->set_flashdata('message','Your Photo has been deleted');
            redirect("farmer/posts/edit/{$post_id}");
        }
        else
        {
            $this->session->set_flashdata('message','Ooops Something went wrong!');
            redirect("farmer/posts/edit/{$post_id}");
        }
    }
    // Filter for the posting by status
    public function status($status = '')
    {
        $this->view = 'posts/index';
        $this->data['posts'] = $this->post->status($status)->get_many_by('user_id',$this->current_user);
    }
}