<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MY_Controller {

	// Load Models
	protected $models = array('product','setting','category');
	public function __construct()
	{
	   parent::__construct();
	   // $this->ion_auth->logged_in_check();
	}

	/**
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * Load crops user has selected and those he hasn't
	 * @return void
	 */
	public function index()
	{
		// Get crop setting config from config/application.php
		$crop_setting = $this->config->item('crop_code','application');
		// Load all user selected crop configs
		$settings = $this->setting->setting($crop_setting)->get_many_by('user_id',$this->current_user);
		// Load product array variable
		$products = '';
		foreach ($settings as $key)
		{
			$products[] = $key->setting_value;
		}
		if($products)
		{
			// Load products the user has not selected
			$this->data['products'] = $this->product->not_selected($products)->get_all();
			// Load user selected products
			$this->data['selection'] = $this->product->selected($products)->get_all();
		}
		else
		{
			$this->data['products'] = $this->product->get_all();
			$this->data['selection'] = $this->product->selected($products)->get_all();
		}


		// $this->data['categories'] = $this->category->get_all();

	}
	/**
	 * add new user crop config
	 * @param int $product_id crop/product id
	 * @access public
	 * @author mogetutu <imogetutu@gmail.com>
	 * @return void
	 */
	public function add_crop_setting($product_id)
	{
		$this->view = false;
		// Grab crop details and user id
		$data = array(
			'user_id' => $this->current_user,
			'setting_code' => 'crop',
			'setting_value' => $product_id,
			'setting_group' => 'PRODUCT_TRACKING'
			);
		// Set user config of crop
		if($this->setting->insert($data))
		{
			$this->session->set_flashdata('message','New Product added to your selection');
			redirect('/products/', 'refresh');
		}
	}
	/**
	 * delete user's crop config
	 * @access public
	 * @author mogetutu <imogetutu@gmail.com>
	 * @param  int $id crop/product id
	 * @return void
	 */
	public function delete_crop_setting($id)
	{
		$this->view = false;
		// Grab crop Deletes
		$data = array('user_id'=>$this->current_user,'setting_value'=>$id);
		// Unset user oonfig of crop
		if ($this->setting->delete_by($data))
		{
			$this->session->set_flashdata('message','The Product has deleted from your selection');
			redirect('/products/','location');
		}
		else
		{
			$this->session->set_flashdata('Oops! Something went Wrong!');
			redirect('products/','refresh');
		}

	}

}

/* End of file Products.php */
/* Location: ./application/controllers/Products.php */