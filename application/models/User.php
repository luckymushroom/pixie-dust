<?php if (! defined('BASEPATH')) exit('No direct script access');

class User extends ActiveRecord\Model {
	static $has_many = array(array('user_group', 'class_name' => 'User_group'));

}