<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Copyright (c) 2012 MFarm LTD.
 * All rights reserved.
 *
 * @package     Orders HTTP POST Controller
 * @author      isaak mogetutu <imogetutu@gmail.com>
 * @copyright   2012 MFarm LTD.
 * @package     Products Module
 * @link        http://mfarm.co.ke
 * @version     @@PACKAGE_VERSION@@
 */
class Products extends MY_Controller {

	// Load Models
	protected $models = array('product','setting','category');
	public function __construct()
	{
	   parent::__construct();
	   $this->ion_auth->logged_in_check();
	}
	/**
	 * Manage products
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 */
	public function index()
	{
		// Load products
		$this->data['products'] = $this->product->get_all();
	}

	public function add_product()
	{
		$this->data['categories'] = $this->category->dropdown('id','category_name');
	}

	/**
	 * View Product to update
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @param $id integer
	 * @return object product
	 */
	public function view($id, $errors=array())
	{
		// Load categories
		$this->data['options'] = $this->category->dropdown('id','category_name');
		// Load selected Product
		$this->data['product'] = $this->product->get($id);
		if ($errors) {
			foreach ($errors as $key => $value) {
				$this->session->set_flashdata('message', $value);
			}
		}

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


	public function update($id = null)
	{
		$this->form_validation->set_rules('product_name', 'Product Name', 'required|trim');
		$this->form_validation->set_rules('product_alias', 'Product Alias', 'required|trim');
		if($this->form_validation->run() == FALSE)
		{
			$errors = $this->form_validation->get_errors_array();
			if ($errors)
			{
				foreach ($errors as $key => $value)
				{
					$this->session->set_flashdata('message', $value);
				}
			}
			redirect("admin/products/view/{$id}", 'location');
		}
		else
		{
			$data = $this->input->post();
			if($id)
			{
				// Update record
				if($this->product->update($id,$data))
				{
					$this->session->set_flashdata('message','Product Updated');
					redirect('admin/products/', 'refresh');
				}
			}
			else
			{
				// Add Record
				if ($this->product->insert($data))
				{
					$this->session->set_flashdata('message','Product Added');
					redirect('admin/products/','refresh');
				}
			}

		}
	}

	public function delete($id)
	{
		// Delete record
		$data = array('deleted' => 1);
		if($this->product->update($id,$data))
		{
			$this->session->set_flashdata('message','Product Deleted');
			redirect('admin/products/', 'refresh');
		}
	}


	public function add_category()
	{
		$data = $this->input->post();
	}

}

/* End of file Products.php */
/* Location: ./application/controllers/Products.php */