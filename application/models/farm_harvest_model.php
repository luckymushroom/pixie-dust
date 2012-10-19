<?php if (! defined('BASEPATH')) exit('No direct script access');

class Farm_harvest_model extends MY_Model
{
    protected $soft_delete = TRUE;
	//php 5 constructor
	function __construct()
	{
		parent::__construct();
	}

}