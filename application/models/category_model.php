<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends MY_Model
{
    protected $soft_delete = TRUE;
	public function __construct()
	{
	   parent::__construct();
	   //Do your magic here
	}
}