<?php if (! defined('BASEPATH')) exit('No direct script access');

class Dashboard extends MY_Controller {

    //php 5 constructor
    function __construct()
    {
        parent::__construct();
        $this->ion_auth->logged_in_check();
    }

    function index()
    {

    }

}
/* End of file dashboard.php */
/* Location: ./application/controllers/buyer/dashboard.php */