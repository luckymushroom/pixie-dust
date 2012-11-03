<?php if (! defined('BASEPATH')) exit('No direct script access');

class Tips extends MY_Controller {

    protected $models = array( 'tip','user','outgoing_text' );
    function __construct()
    {
        parent::__construct();
        $this->ion_auth->logged_in_check();
    }
    /**
     * List All tips related to the aggregator
     * @return array tips
     */
    function index()
    {
        $this->data['tips'] = $this->tip->aggregator($this->current_user)->get_all();
    }

    public function send_tip($tip_id)
    {
        $text = $this->tip->get($tip_id)->tip;
        $mobile_numbers = $this->user->get_many_by('aggregator', $this->current_user);

        // closure to send out tip via text
        array_walk($mobile_numbers, function($value, $key) use($text)
        {
            // $this->curl_sms_action($value->phone, $text, 'aggregator/tips');
        });
    }

}