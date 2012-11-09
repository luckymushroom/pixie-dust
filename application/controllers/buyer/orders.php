<?php if (! defined('BASEPATH')) exit('No direct script access');

class Orders extends MY_Controller {

    protected $models = array( 'order', 'user' );
    function __construct()
    {
        parent::__construct();
        $this->ion_auth->logged_in_check();
    }

    function index()
    {
        $user = array('user_id' => $this->current_user);
        $this->data['orders'] = $this->order->join('products')->get_many_by($user);
    }

}