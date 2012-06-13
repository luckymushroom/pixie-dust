<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct()
	{
	   parent::__construct();
	   //Do your magic here
	   $this->ion_auth->logged_in_check();
	}
	public function index()
	{
		$this->data['posts'] = self::posts_count();
		$this->data['orders'] = 10;
		$this->data['invites'] = 10;
	}

	public function posts_count()
	{
		$posts = count(Post::find_all_by_user_id($this->current_user));
		return $posts;
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */