<?php if (! defined('BASEPATH')) exit('No direct script access');
/**
 * Copyright (c) 2012 MFarm LTD.
 * All rights reserved.
 *
 * @package     Orders HTTP POST Controller
 * @author      isaak mogetutu <imogetutu@gmail.com>
 * @copyright   2012 MFarm LTD.
 * @package     Reports Module
 * @link        http://mfarm.co.ke
 * @version     @@PACKAGE_VERSION@@
 */
class Reports extends MY_Controller {

	//php 5 constructor
	function __construct()
	{
		parent::__construct();
        $this->layout = 'layouts/farmer_template';
        $this->ion_auth->logged_in_check();
	}

	function index()
	{
		// :Load PDF reports
	}

    public function show($id)
    {
        # code...
    }

    public function upload()
    {
        
    }

    public function delete($id)
    {
        # code...
    }

}