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
		$this->data['page_title'] = 'Marketplace';
		$this->data['posts'] =$this->post->live()->with_order_details()->match_products()->with_photos()->with_location()->order_by('posts.id','desc')->get_all();
	}

	public function faq()
	{
		$this->data['page_title'] = 'FAQs';
	}

	public function price($date = '')
	{
		$this->data['page_title'] = 'Wholesale Market Price Information';
		$this->data['prices'] = $this->price->get_prices($date)->get_all();
	}

	public function press()
	{
		// Stories will be here
		$this->data['page_title'] = 'Press Page';
		$this->data['links'] = Page::find('all',array('conditions'=>array('deleted = ? AND page = ?',0,'press')));
	}

	public function admin($section)
	{
		// Check is bugger is logged
		$this->ion_auth->logged_in_check();
		$this->layout = 'layouts/blog';
		$this->data['items'] = Page::find('all',array('conditions' => array('deleted = ? AND page = ?', 0, $section)));
	}

	public function admin_add($section)
	{
		$item = new Page();
		$item->title = 'Draft '.$section.' Item';
		$item->page = $section;
		$item->save();
		redirect("/site/admin_edit/{$item->id}", 'refresh');
	}

	public function test($date)
	{
		$with_date = $this->db->where('crop_date', $date);
		$without_date = $this->db->where('crop_date', '(SELECT max(crop_date) FROM prices)', false);
		$sql = ($date) ? $with_date : $without_date;
		echo "<pre>";
		var_dump( $sql );
		echo "</pre>";
	}

	public function admin_edit($id)
	{
		// Check is bugger is logged
		$this->ion_auth->logged_in_check();
		$this->layout = 'layouts/blog';
		$press_item = Page::find($id);
		$this->data['item'] = $press_item;
		if($this->input->post())
		{
			$press_item->title         = $this->input->post('title', TRUE);
			$press_item->visual        = $this->input->post('visual', TRUE);
			$press_item->body          = $this->input->post('body', TRUE);
			$press_item->external_link = $this->input->post('external_link', TRUE);
			$press_item->source        = $this->input->post('source', TRUE);
			$press_item->author_id     = $this->current_user;
			$press_item->save();
			$this->session->set_flashdata('message','Press Item Updated!');
			redirect('/site/admin/press', 'refresh');
		}
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