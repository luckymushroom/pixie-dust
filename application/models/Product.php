<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends ActiveRecord\Model {
	static $belongs_to = array('category');
}