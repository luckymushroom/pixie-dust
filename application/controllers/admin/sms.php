<?php if (! defined('BASEPATH')) exit('No direct script access');

class Sms extends MY_Controller {

    protected $models = array('incoming_text');
    function __construct() 
    {
        parent::__construct();
        $this->ion_auth->logged_in_check();
    }
    
    public function index()
    {
        $this->data['all']         = count($this->incoming_text->get_all());
        $this->data['today']       = count($this->incoming_text->today()->get_all());
        $this->data['price']       = count($this->incoming_text->by_keyword('price')->get_all());
        $this->data['today_price'] = count($this->incoming_text->by_keyword('price')->today()->get_all());
        $this->data['join']        = count($this->incoming_text->by_keyword('join')->get_all());
        $this->data['today_join']  = count($this->incoming_text->by_keyword('join')->today()->get_all());
        $this->data['sell']        = count($this->incoming_text->by_keyword('sell')->get_all());
        $this->data['today_sell']  = count($this->incoming_text->by_keyword('sell')->today()->get_all());
    }

    public function incoming_sms()
    {
        $this->session->set_flashdata('referrer',uri_string());
        $this->data['filter'] = $this->uri->uri_to_assoc(4);
        $this->data['link'] = "{$this->router->directory}{$this->router->class}/{$this->router->method}";
        $this->data['texts'] = $this->incoming_text->filter($this->data['filter'])->get_all();
    }

    public function price_texts()
    {
        $this->view = 'admin/sms/incoming_sms';
        $filter = $this->uri->uri_to_assoc(4);
        $this->data['link'] = "{$this->router->directory}{$this->router->class}/{$this->router->method}";
        $this->data['texts'] = $this->incoming_text->by_keyword('price')->filter($filter)->get_all();
    }

    public function sell_texts()
    {
        $this->view = 'admin/sms/incoming_sms';
        $filter = $this->uri->uri_to_assoc(4);
        $this->data['link'] = "{$this->router->directory}{$this->router->class}/{$this->router->method}";
        $this->data['texts'] = $this->incoming_text->by_keyword('sell')->filter($filter)->get_all();
    }
    public function join_texts()
    {
        $this->view = 'admin/sms/incoming_sms';
        $filter = $this->uri->uri_to_assoc(4);
        $this->data['link'] = "{$this->router->directory}{$this->router->class}/{$this->router->method}";
        $this->data['texts'] = $this->incoming_text->by_keyword('join')->filter($filter)->get_all();
    }

    public function delete_sms($id,$filter = '')
    {
        $data = array('deleted' => 1);
        $filter = $this->session->flashdata('referrer');
        if($this->incoming_text->delete($id))
        {
            $this->session->set_flashdata('message','Text Deleted!');
            redirect("admin/sms/incoming_sms/{$filter}", 'refresh');
        }
        else
        {
            $this->session->set_flashdata('message','Oops, Text was NOT Deleted!');
            redirect("admin/sms/incoming_sms/{$filter}", 'refresh');
        }
    }

    public function incoming_sms_graphs($start = '', $end = '')
    {
        $this->view = false;
        $sql = 'SELECT DISTINCT(DATE_FORMAT(date_created,"%Y-%m-%d")) AS thedate, count( * ) AS count FROM incoming_texts WHERE date(date_created) < "2012-08-17" AND date(date_created) > "2011-10-01" GROUP BY (DATE_FORMAT(date_created,"%Y-%m")) ORDER BY id ASC';

        $texts = $this->db->query($sql)->result();
        foreach ($texts as $row)
        {
            $month[] = $row->thedate;
            $count[] = $row->count;
            $series_data[] = array('name' => 'Incoming Texts', 'data' => $count);
        }
        $this->data['series_data'] = json_encode($series_data);
        $this->data['date_data'] = json_encode($month);
    }

    public function links()
    {
        $array1 = $this->uri->uri_to_assoc();
        $array2 = array('date_created'=>'Today');
        var_export($this->uri->assoc_to_uri(array_merge($array1, $array2)));
    }
    public function test_sms() {}

}