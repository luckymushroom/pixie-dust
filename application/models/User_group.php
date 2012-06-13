<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_group extends ActiveRecord\Model {

	static $belongs_to = array('groups');

	public function __construct()
	{
		parent::__construct();
		
	}

}

/* End of file User_group.php */
/* Location: ./application/models/User_group.php */