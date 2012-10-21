<?php if (! defined('BASEPATH')) exit('No direct script access');

class Bulk_sms extends MY_Controller {

    protected $models = array( 'incoming_text','user','bulk_text' );
    public $before_create = array( 'created_at', 'updated_at' );
    public $before_update = array( 'updated_at' );
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->output->enable_profiler(true);
        // List Numbers
        $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));

        if ( ! $bulksms = $this->cache->get('bulksms'))
        {
            $bulksms = $this->incoming_text->unique_numbers()->get_all();
            // Save into the cache for 2 minutes
            $this->cache->save('bulksms', $bulksms, 150);
        }
        $this->data['numbers'] = $bulksms;
    }

    public function thread($number)
    {
        $this->data['messages'] = $this->incoming_text->order_by('date_created','desc')->get_many_by('number',$number);
        $this->data['account'] = $this->user->get_by('phone',$number);
    }

    public function add_to_bulk($number)
    {
        $number_lookup = $this->bulk_text->get_by('bulk_number',$number);
        if(!$number_lookup)
        {
            $this->bulk_text->insert(array('bulk_number'=>$number));
            $this->session->set_flashdata('message', 'Number Added to Bulk SMS');
            redirect('admin/bulk_sms','refresh');
        }
    }

}