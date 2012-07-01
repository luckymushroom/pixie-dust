<?php if (! defined('BASEPATH')) exit('No direct script access');

class Farm extends MY_Controller {

	protected $models = array('county','farm_detail','product','farm_crop');
	//php 5 constructor
	function __construct()
	{
		parent::__construct();
		//Do your magic here
	   $this->ion_auth->logged_in_check();
	   $seller = 'layouts/seller_template';
	   $admin = 'layouts/admin_template';
	   $this->layout = ($this->ion_auth->in_group('admin')) ? $admin : $seller ;

	}

	function index()
	{
		// Dashboard for farm
	}

	/**
	 * Farmers Functions Here
	 * :List Farmer Details
	 * :Add Farmer :Photo Upload not working && Payment Option
	 * :Remove Farmer
	 * :Edit Farmer Profile : Done
	 * :Check Farmers Updates
	 * :Payments to Farmers History
	 *
	 */
	public function details($user_id = '')
	{
		// Form
		// County, division, location, sub, village and acres
		$this->data['county_id'] = '';
		$this->data['counties'] = $this->county->dropdown('id','county_name');
		$farm = $this->farm_detail->get_by('user_id',$this->current_user);
		self::list_row_items($farm);

		// Update or insert data of user
		if ($this->input->post())
		{
			if($farm)
			{
				// Update Record
				$update = $this->farm_detail->update($farm->id,$this->input->post());
				if($this->db->affected_rows())
				{
					$this->session->set_flashdata('message','Shamba detail has been updated');
					redirect('/farm/details/', 'refresh');
				}
			}
			else
			{
				// Add Record
				$_POST['user_id'] = $this->current_user;
				$add = $this->farm_detail->insert($this->input->post());
				if($add)
				{
					$this->session->set_flashdata('message','Detail has been added');
					redirect('/farm/details/', 'refresh');
				}
			}
		}


	}
	/**
	 * List Add and Update crops grown by farmer
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @param  int $user_id user id
	 * @return void
	 */
	public function crops_grown($user_id = '')
	{
		// List crops in mfarm
		// Add to list of crop grown
		$this->data['commodity_id'] = '';
		$this->data['commodities'] = $this->product->dropdown('id','product_name');
		$this->data['crops'] = $this->farm_crop->get_many_by('user_id',$this->current_user);
		$id = $this->input->post('id',TRUE);
		if($this->input->post())
		{
			if($id)
			{
				$update = $this->farm_crop->update($id,$this->input->post());
				if($this->db->affected_rows())
				{
					$this->session->set_flashdata('message','Planting Details updated');
					redirect('/farm/crops_grown/','refresh');
				}
			}
			else
			{
				$_POST['user_id'] = $user_id;
				$add = $this->farm_crop->insert($this->input->post());
				if($add)
				{
					$this->session->set_flashdata('message','Planting Details added');
					redirect('/farm/crops_grown/','refresh');
				}
			}
		}
	}
	/**
	 * Edit Crop Details of Post
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @param  int $id
	 * @return void
	 */
	public function edit_crops_grown($id)
	{
		$this->data['products'] = $this->product->dropdown('id','product_name');
		$this->data['item'] = $this->farm_crop->get_by('farm_crops.id',$id);
	}
	/**
	 * Run thru row items and add the to the $this->data array()
	 * @author mogetutu <imogetutu@gmail.com>
	 * @access public
	 * @php +5.2
	 * @param  array $row items
	 * @return array
	 */
	public function list_row_items($row)
	{
		if($row)
		{
			foreach ($row as $key => $value) {
				$this->data[$key] = $value;
			}
			return $row;
		}
	}

	public function harvest()
	{
		
	}
}