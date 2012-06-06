<?php if (! defined('BASEPATH')) exit('No direct script access');

class Trends extends MY_Controller
{
	protected $models = array('product','trend');
	//php 5 constructor
	function __construct()
	{
		parent::__construct();
		$this->ion_auth->logged_in_check();
	}
	/**
	 * Load trends for the user
	 * @access public
	 * @author mogetutu <imogetutu@gmail.com>
	 * @return json array()
	 */
	public function index($product_id = 44)
	{
		$this->data['products'] = $this->product->dropdown('id','product_name');
		//Start
		$this->data['product_id'] = $product_id;
		//Below comes from a query which get towns
		$towns_result = $this->db->where_in('id',array(43,44,45,55,56))->get('locations')->result();

		//init prices array, not really necessary
		$prices = array();
		$series_data = array();

		foreach ($towns_result as $row)
		{
			$town_abbrev = $row->location_name; //this produces sth like NBI
			$town_id = $row->id;

			if($this->input->is_ajax_request())
			{
				$days = $this->input->post('days', TRUE);
				$this->data['days'] = $days;
				//The getPrices() function must return an array of 12 elements, no more and no less
				$items = $this->get_prices($product_id, $town_id, $days);
			}
			else
			{
				//The getPrices() function must return an array of 12 elements, no more and no less
				$items = $this->get_prices($product_id, $town_id);
			}

			$series_data[] = array('name'=>$town_abbrev, 'data'=>$items[0]);
		}
		$this->data['series_data'] = json_encode($series_data);
		$this->data['months_data'] = json_encode($items[1]);
	}
	/**
	 * get prices by product town and time
	 * @access public
	 * @author mogetutu <imogetutu@gmail.com>
	 * @param  int $product_id
	 * @param  int  $town_id
	 * @param  int $days
	 * @return array price and months array
	 */
	function get_prices($product_id, $town_id, $days = 365)
	{
		//database stuff here, returns a result pointer.
		$prices_result = $this->trend->get_prices($product_id, $town_id, $days);

		//your query should return results in this order:
		//1 | 3100
		//2 | 2800
		//where 1 and 2 are month numbers and 3100 and 2800 are avg prices for those months, respectively
		//init prices array
		$prices = array();
		$months = array();
		foreach ($prices_result as $row) {
			$prices[] = round($row->avg_price);
			$months[] = $row->m_date;
		}

		// return $prices + $months arrays;
		return $items = array($prices,$months);
	}

}