<?php if (! defined('BASEPATH')) exit('No direct script access');

class Users extends MY_Controller {

    protected $models = array( 'user','post' );
    function __construct()
    {
        parent::__construct();
    }

    public function index($user)
    {
        $this->data['farmers'] = $this->user->get_many_by('aggregator', $user);
    }
    /**
     * Show Farmer Profile
     * @param  int $user aggregator
     * @param  int $farmer
     * @return array
     * @author mogetutu <imogetutu@gmail.com>
     */
    public function show($user,$farmer)
    {
        $farmer = $this->user->aggregator($this->current_user)->get($farmer);
        if($farmer)
        {
            $this->data['farmer'] = $farmer;
        }
        else
        {
            $this->session->set_flashdata('message', 'User not Found');
            redirect("aggregator/users/{$user}/{$farmer}");
        }

    }
    /**
     * Update user profile
     * @author mogetutu <imogetutu@gmail.com>
     */
    public function update($user,$farmer)
    {
        if($this->user->aggregator($this->current_user)->get($farmer))
        {
            $update = $this->user->update($farmer, $this->input->post());
            if($update)
            {
                $this->session->set_flashdata('message', 'Updated Successfully');
                redirect("aggregator/users/{$user}/{$farmer}");
            }
            else
            {
                $this->session->set_flashdata('message', 'Not Updated');
                redirect("aggregator/users/{$user}/{$farmer}");
            }
        }
    }
    /**
     * Delete User account from aggregator panel
     * @author mogetutu <imogetutu@gmail.com>
     */
    public function delete($id)
    {
        $this->user->update($id,array('aggregator'=>0));
        if($this->db->affected_rows())
        {
            $this->session->set_flashdata('message','Farmer Removed Successful!');
            redirect("aggregator/users/{$this->current_user}", 'refresh');
        }
        else
        {
            $this->session->set_flashdata('message','Oops, Somethings went wrong. Please Try Again.');
            redirect("aggregator/users/{$this->current_user}",'refresh');
        }
    }

    /**
     * upload profile photo
     * @author isaak mogetutu <imogetutu@gmail.com>
     * @access public
     * @version 1.0
     * @return void
     */
    public function upload_photo($user, $farmer)
    {
        if($_FILES['user_avatar']['error'] == 0)
        {
            //upload and update the file
            $config['upload_path'] = './media/avatars/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['overwrite'] = false;
            $config['remove_spaces'] = true;
            //$config['max_size']   = '100';// in KB

            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('user_avatar'))
            {
                $this->session->set_flashdata('message', $this->upload->display_errors());
            }
            else
            {
                //Image Resizing
                $config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 300;
                $config['height'] = 200;
                $this->load->library('image_lib', $config);
                if ( ! $this->image_lib->resize())
                {
                    $this->session->set_flashdata('message', $this->image_lib->display_errors());
                }

                $this->user->update($farmer,array('avatar'=>$this->upload->file_name));
                //Need to update the session information if email was changed
                if ($this->db->affected_rows())
                {
                    $this->session->set_flashdata('message', 'Your Photo has been Uploaded!');
                }
                else
                {
                    $this->session->set_flashdata('message', 'Oops! Something went wrong');
                }
            }

        }
        redirect("aggregator/users/{$user}/{$farmer}");
    }
}