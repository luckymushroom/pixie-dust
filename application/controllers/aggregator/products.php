<?php
if (! defined('BASEPATH')) exit('No direct script access');

class Products extends MY_Controller {

    protected $models = array('product','trend','price');
    function __construct()
    {
        parent::__construct();
        $this->ion_auth->logged_in_check();
    }

    function index($status = 'live', $date = null)
    {
        // Load prices
        $this->data['prices'] = $this->price->product_name()
        ->location_name()
        ->with_username()
        ->admin_get_prices($status, $date)
        ->get_all();
    }

    public function trends($product_id = 44)
    {
        $this->data['products'] = $this->product->dropdown('product_name');
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
                $items = $this->trend->get_prices_by($product_id, $town_id, $days);
            }
            else
            {
                //The getPrices() function must return an array of 12 elements, no more and no less
                $items = $this->trend->get_prices_by($product_id, $town_id);
            }

            $series_data[] = array('name'=>$town_abbrev, 'data'=>$items[0]);
        }
        $this->data['series_data'] = json_encode($series_data);
        $this->data['months_data'] = json_encode($items[1]);
    }

}