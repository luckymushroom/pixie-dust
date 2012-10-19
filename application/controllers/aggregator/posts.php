<?php if (! defined('BASEPATH')) exit('No direct script access');

class Posts extends MY_Controller {

    protected $models = array( 'user', 'post','product' );
    protected $asides = array( 'sidebar' => 'aggregator/posts/_sidebar' );
    function __construct()
    {
        parent::__construct();
        $this->weeknumber = $this->input->post('weeknumber');
        $this->data['weeknumber'] = (isset($this->weeknumber)) ? $this->weeknumber : date('W');
        $this->ion_auth->logged_in_check();
    }

    public function index()
    {
        $weeknumber = (isset($this->weeknumber)) ? $this->weeknumber : date('W');
        $this->data['weeks'] = $this->post->get_week_numbers();
        $this->data['weeknumber'] = $weeknumber;
        $this->data['posts'] = $this->post->aggregated_product($this->current_user, $weeknumber)->get_all();
    }

    public function show($id)
    {
        $this->data['post'] = $this->post->get($id);
        $this->data['username'] = $this->user->get($this->data['post']->user_id)->username;
        $this->data['weeks'] = $this->post->get_week_numbers();
        $this->data['weeknumber'] = (isset($this->weeknumber)) ? $this->weeknumber : date('W');
        $this->data['products'] = $this->product->dropdown('product_name');
    }

    public function edit($id)
    {
        if($id)
        {
            if($this->input->post())
            {
                // Update existing Post
                $_POST['updated_by'] = $this->current_user;
                $approved_weight = $this->input->post('approved_product_weight');
                // if($weight == $this->post->get($id)->product_weight)
                // {
                //     unset($_POST['approved_product_weight']);
                //     unset($_POST['updated_by']);
                // }
                $update = $this->post->update($id,$this->input->post());
                if($this->db->affected_rows())
                {
                    $this->session->set_flashdata('message','Post had been Updated!');
                    redirect("aggregator/posts");
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
                $_POST['updated_by'] = $this->current_user;
                $id = $this->post->insert($this->input->post());
                if($id)
                {
                    $this->session->set_flashdata('message','New Post Created');
                    redirect("aggregator/posts");
                }
            }
        }
    }

    public function user($user, $status = null)
    {
        $this->view          = 'aggregator/posts/index';
        $this->data['weeks'] = $this->post->get_week_numbers();
        $this->data['posts'] = $this->post->posts_with($user, $status)->get_all();
    }
    /**
     * List posts by status: approved vs rejected
     */
    public function status($state)
    {
        $this->view               = 'aggregator/posts/index';
        $this->data['weeks']      = $this->post->get_week_numbers();
        $this->data['weeknumber'] = (isset($this->weeknumber)) ? $this->weeknumber : date('W');
        $this->data['posts']      = $this->post->aggregated_product($this->current_user, $this->data['weeknumber'], $state)->get_all();
    }
    /**
     * Approve and update weight products
     */
    public function verify($id, $weight)
    {
        $this->view = false;
        if($this->post->get($id)->product_weight < $weight)
        {
            $this->post->update_weight($id, $weigth);
            redirect('aggregator/posts');
        }
    }
}