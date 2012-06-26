<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends MY_Controller {

	/**
	 * Load models
	 */
	protected $models = array('post','price');
	public function __construct()
	{
		parent::__construct();
		$this->layout = 'layouts/application';
		$this->data['page_title'] = '';
		$this->data['page_subtitle'] = '';
		// $this->load->library('user_agent');
		// if ($this->agent->is_mobile()) {
		// 	redirect('http://m.mfarm.co.ke','refresh');
		// }
	}

	public function index()
	{
		// Stories will be here
		$this->data['page_title'] = 'Homepage';
		$this->data['posts'] =$this->post->live()->with_order_details()->match_products()->with_photos()->with_location()->order_by('posts.id','desc')->get_all();
	}

	public function faq()
	{
		$this->data['page_title'] = 'FAQs';
	}

	public function price()
	{
		$this->data['page_title'] = 'Wholesale Market Price Information';
		$this->data['prices'] = $this->price->latest()->get_prices()->get_all();
	}

	public function press()
	{
		// Stories will be here
		$this->data['page_title'] = 'Press Page';
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

	/**
	 * Loads feeds
	 * @return data array
	 */
	function ktn()
	{
		$this->layout = FALSE;
		$this->data['xml_start'] = trim("<?xml version=\"1.0\" encoding=\"utf-8\"?>\n");
		$this->output->set_header("Content-Type: text/xml"); // important!
		$this->data['feeds'] = $this->price->get_prices()->get_all();
	}
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */