<?php if (! defined('BASEPATH')) exit('No direct script access');

class Dashboard extends MY_Controller {

    protected $models = array( 'user', 'post','product' );
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        // Total Farmers
        $this->data['total_farmers'] = count($this->user->get_many_by('aggregator', $this->current_user));
        // New Posts
        $this->data['posts'] = $this->post
                                    ->aggregated_product($this->current_user)
                                    ->order_by('posts.id','desc')
                                    ->limit(5)->get_all();
        // New Farmers
        $this->data['farmers'] = $this->user->order_by('id','desc')
                                          ->limit(5)
                                          ->get_many_by('aggregator', $this->current_user);
        // Aggregation Code
        $this->data['aggregation_code'] = $this->ion_auth->profile();
    }

}