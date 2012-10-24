<?php if (! defined('BASEPATH')) exit('No direct script access');

class Tips extends MY_Controller {

    protected $models = array( 'tip','user' );
    function __construct()
    {
        parent::__construct();
    }
    /**
     * List All tips related to the aggregator
     * @return array tips
     */
    function index()
    {
        $this->data['tips'] = $this->tip->aggregator($this->current_user)->get_all();
    }

}