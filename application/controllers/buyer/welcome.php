<?php if (! defined('BASEPATH')) exit('No direct script access');

class Welcome extends MY_Controller {

    //php 5 constructor
    function __construct()
    {
        parent::__construct();
        $this->ion_auth->logged_in_check();
    }

    function index() {
        foreach ($classes as $class => $value) {
            echo "something";
        }
    }

}