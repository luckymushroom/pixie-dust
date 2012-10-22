<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Copyright (c) 2012 MFarm LTD.
 * All rights reserved.
 *
 * @package     Orders HTTP POST Controller
 * @author      isaak mogetutu <imogetutu@gmail.com>
 * @copyright   2012 MFarm LTD.
 * @package     Website Module
 * @link        http://mfarm.co.ke
 * @version     @@PACKAGE_VERSION@@
 */
class Site extends MY_Controller
{

	protected $models = array('post','price','page','blog','blog_category','product');
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
		// Market will be here
		$select = 'posts.id,posts.post_photo,product_name,delivered,description,image,weight_unit,unit_price,packaging,product_weight';
		$product = ($this->uri->segment(2)) ? $this->uri->segment(2) : $this->input->post('search');
		$this->data['search'] = $product;
		$this->data['page_title'] = 'Marketplace';
		$this->data['posts'] = $this->post->select($select)->live()->join('products')->product($product)->order_by('posts.id','desc')->get_all();
		// Check if products exists on search
		if($product && ($this->data['posts'] == null))
		{
			$this->session->set_flashdata('message','Item not Found!');
			redirect('market');
		}
	}
		/**
	 * Load the blog page
	 */
	public function blog()
	{
		// Blog will be here
		$this->data['page_title'] = 'Our Thoughts';
		$this->data['page_subtitle'] = 'Sometimes Great Ideas Come From a Story';
		// Recent Posts
		$this->data['recent'] = $this->blog->live()->order_by('blogs.updated_at','desc')->limit(1)->get_all();
		$this->data['classifieds'] = self::classifieds(3);
		$this->data['blog_categories'] = $this->blog_category->get_all();

		// Pagination
		$this->load->library('pagination');

		$config['base_url']   = base_url('/blog/page/');
		$config['per_page']   = 4;
		$config['total_rows'] = count($this->blog->live()->get_all());
		$config['first_link'] = 'First';
		$config['last_link']  = 'Last';
		$config['num_links'] = 3;

		$this->pagination->initialize($config);

		// List all blog posts
		$this->data['posts'] = $this->blog->live()->join('users')->order_by('blogs.updated_at','desc')->limit($config['per_page'], $this->uri->segment(3))->get_all();
		$this->data['create_links'] = $this->pagination->create_links();
	}
	/**
	 * Display Single Blog Post
	 */
	public function post($slug)
	{
		$this->load->spark('disqus-spark/0.0.6');
		$slug = (is_numeric($slug)) ? $this->blog->get($slug)->slug : $slug; // Get by id or by slug
		if($slug)
		{
			$post = $this->blog->join('users')->get_by('slug', $slug);
			$category = $post->blog_category_id;
			$this->data['related_posts']   = self::related_posts($slug, $category);
			$this->data['page_title']      = $post->title;
			$this->data['page_subtitle']   = '';
			$this->data['post']            = $post;
			$this->data['recent']          = $this->blog->live()->order_by('blogs.id','desc')->limit(1)->get_all(); // Recent Posts
			$this->data['classifieds']     = self::classifieds(3);
			$this->data['blog_categories'] = $this->blog_category->get_all();
			$this->data['disqus']          = $this->disqus->get_html();
		}
		else
		{
			redirect('/');
		}
	}

	public function faq()
	{
		$this->data['page_title'] = 'FAQs';
	}

	public function price($date = '')
	{
		$this->data['page_title'] = 'Wholesale Market Price Information';
		$this->data['prices'] = $this->price->product_name()->location_name()->get_prices($date)->get_all();
	}

	public function press()
	{
		// Stories will be here
		$this->data['page_title'] = 'Press Page';
		$this->data['links'] = $this->page->section('press')->get_all();
	}

	public function services()
	{
		// Stories will be here
		$this->data['page_title'] = 'Our Services';
        $this->data['page_subtitle'] = 'Service Options That Suit Your Needs';
	}

	public function press_admin()
	{
		// Check is bugger is logged
		$this->ion_auth->logged_in_check();
		$this->layout = 'layouts/blog';
		$this->data['items'] = $this->page->section('press')->get_all();
	}

	public function admin_add($section)
	{

		// create and empty record and redirect
		$post = array('title' => 'Draft Item','page' => $section);
		$this->page->insert($post);
		$item_id = $this->db->insert_id();
		if($item_id)
			redirect("/site/admin_edit/{$item->id}", 'refresh');
	}

	public function admin_edit($id)
	{
		// Check is bugger is logged
		$this->ion_auth->logged_in_check();
		$this->layout = 'layouts/blog';
		$press_item = $this->page->get($id);
		$this->data['item'] = $press_item;
		if($this->input->post())
		{
			$data = array(
			'title'         => $this->input->post('title', TRUE),
			'visual'        => $this->input->post('visual', TRUE),
			'body'          => $this->input->post('body', TRUE),
			'external_link' => $this->input->post('external_link', TRUE),
			'source'        => $this->input->post('source', TRUE),
			'author_id'     => $this->current_user,
			);
			$this->page->update($id,$data);
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

	public function how_to()
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
		$this->data['feeds'] = $this->price->product_name()->location_name()->get_prices()->get_all();
	}

	/**
	 * Login user to the marketplace
	 */
		//log the user in
	function login()
	{
		$this->view = FALSE;
		if ($this->ion_auth->logged_in())
		{
			//already logged in so no need to access this page
			redirect($this->config->item('base_url'), 'refresh');
		}

		//validate form input
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == true)
		{ //check to see if the user is logging in
			//check for "remember me"
			$remember = (bool) $this->input->post('remember');

			if ($this->ion_auth->login($this->input->post('email'), $this->input->post('password'), $remember))
			{ //if the login is successful
				//redirect them back to the home page
				$this->session->set_flashdata('message', $this->ion_auth->messages());
                $this->session->set_flashdata('message','Welcome '.$this->session->userdata('username'));
				redirect('/market/', 'refresh');
			}
			else
			{
				//if the login was un-successful
				//redirect them back to the login page
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('/market/', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		}
		else
		{  //the user is not logging in so display the login page
			//set the flash data error message if there is one
			$this->session->set_flashdata('message',validation_errors());
			redirect('/market/', 'refresh');
		}
	}

	//log the user out
	function logout()
	{
		$this->data['title'] = "Logout";

		//log the user out
		$logout = $this->ion_auth->logout();

		//redirect them back to the page they came from
		redirect('/index/', 'refresh');
	}

	public function create_order()
	{
		if ($this->ion_auth->logged_in()) {
			$this->session->set_flashdata('message','Order has been created');
			redirect('/index/', 'refresh');
		} else {
			$this->session->set_flashdata('message','Please Login to Order');
			redirect('/index/', 'refresh');
		}
	}

	function contact_send()
	{
		if ($this->input->post('email'))
		{
			# Loading email library of Codeigniter
			$this->load->library('email');

			# Setting email address and name of the person sending the email
			$this->email->from($this->input->post('email'),$this->input->post('name'));
			# Setting email address of the recipient
			$this->email->to('info@mfarm.co.ke');
			# Setting email subject
			$this->email->subject($this->input->post('subject'));
			# Setting email message body
			$this->email->message($this->input->post('message',true));
			# If mail sending successful
			if ($this->email->send())
			{
				# If $mail_sent = true; it will show a success message.
				$this->session->set_flashdata('message','We will get back to you as soon as possible');
				redirect('site/contact', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('message',$this->email->print_debugger());
				redirect('site/contact', 'refresh');
			}
        }
	}

	public function classifieds($limit = '')
	{
		 return $this->post->live()->with_order_details()->join('products')->order_by('posts.id','desc')->limit($limit)->get_all();
	}

	public function related_posts($slug, $category, $limit = 5)
	{
		// Related Posts
		return $this->blog->live()->related_posts($category, $slug)->limit($limit)->order_by('id','desc')->get_all();
	}
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */