<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends MY_Controller {

	/**
	 * Load models
	 */
	protected $models = array('post','price');
	public function __construct()
	{
		parent::__construct();
		$this->data['page_title'] = '';
		$this->data['page_subtitle'] = '';
	}

	public function index()
	{
		// Stories will be here
		$this->data['page_title'] = 'Homepage';
		$this->data['posts'] =$this->post->with_order_details()->match_products()->with_photos()->with_location()->get_all();
	}

	public function stories()
	{
		
	}

	public function prices()
	{
		$this->data['page_title'] = 'Wholesale Market Price Information';
		$this->data['prices'] = $this->price->get_prices()->get_all();
	}

	public function press()
	{
		
	}

	public function about()
	{
		$this->data['page_title'] = 'About Us';
        $this->data['page_subtitle'] = "Every great dream has a story, Here's ours";	
	}

	public function team()
	{
		$this->data['page_title'] = 'Team';
	}

	public function partners()
	{
		# code...
	}

	public function services()
	{
		$this->data['page_title'] = 'Our Services';
        $this->data['page_subtitle'] = 'Service Options That Suit Your Needs';	
	}

	public function contact()
	{
		$this->data['page_title'] = 'Contact Us';
		$this->data['page_subtitle'] = 'Well, We want to Hear from You, too!';
	}
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */