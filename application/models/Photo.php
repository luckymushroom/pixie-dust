<?php if (! defined('BASEPATH')) exit('No direct script access');

class Photo extends ActiveRecord\Model {

	static $belongs_to = array('post');

}