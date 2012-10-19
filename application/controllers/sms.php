<?php if (! defined('BASEPATH')) exit('No direct script access');
/**
 * Copyright (c) 2012 MFARM LTD.
 *
 * All rights reserved.
 *
 * @package    M-Farm_Web_Application
 * @subpackage SMS_Module
 * @author     mogetutu <imogetutu@gmail.com>
 * @copyright  2012 MFARM LTD.
 * @license    http://source.mfarm.co.ke NOT GPL
 * @version    1.0
 * @link       http://mfarm.co.ke
 */
class SMS extends MY_Controller
{
    /**
    * var sms message
    */
    protected $message;

    /**
    * var sender
    * */
    protected $mobile_number;

    /**
     * var message_date_time
     */
    protected $message_date_time;

    /**
     * Default SMS to users
     */
    protected $default_message = 'Welcome to Mfarm SMS system: #KEYWORDS are #PRICE #BUY #SELL #JOIN';

    /**
     * Sending Network ID
     */
    protected $network;

    /**
     * Load models here
     */
    protected $models = array('outgoing_text','incoming_text','price','user','location','product','post','order_detail');
    /**
     * Constructor
     */
    function __construct()
    {
        parent::__construct();
        $this->mobile_number = $this->input->post('source', true);
        $this->message = $this->input->post('message', true);
        $this->network = $this->input->post('network', true);
        $message_date_time = now();
        $this->date = date('Y-m-d');
        $this->load->model('sms_model','sms');
        $this->layout = 'layouts/admin_template';
    }

    /**
     * Grab Message and run through Keyword actions
     * @author mogetutu <imogetutu@gmail.com>
     * @access public
     * @return message back to the user with info
     */
    public function index()
    {
        $this->view = false;
        // Check for number, keywords in message
        if( (isset($this->mobile_number)) && (isset($this->message)) )
        {
            // Explode message to get keywords separator is space
            $this->message = preg_replace('/[\.]+$/', '', $this->message);
            $this->message = preg_replace('/[\.\_\-\W]+/', ' ', $this->message);
            $message = strtolower($this->message);
            $exploded_message = explode(' ', $message);
            $keyword = strtolower($exploded_message[0]);
            // PASSED vs FAILED Texts
            $outgoing_text = (in_array($keyword, array('price','join','start','sub','sell','sale','buy','aggregate'))) ? 1 : 0;
            $post = array(
            'number'        => $this->mobile_number,
            'message'       => $this->message,
            'network'       => $this->network,
            'outgoing_texts' => $outgoing_text
            );
            // Save incoming sms
            self::save_incoming_sms($post);
            switch ($keyword)
            {
                case 'price':
                    self::price_sms($message);
                    break;
                case 'join':
                case 'start':
                case 'sub':
                    self::subscribe($message);
                    break;
                case 'sell':
                case 'sale':
                    self::sell_sms($message);
                    break;
                case 'buy':
                    self::buy_sms($message);
                    break;
                case 'aggregate':
                    self::aggregate_sms($message);
                    break;
                default:
                    self::default_sms($message);
                    break;
            }
        }
    }

    /**
     * Save incoming messages
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @access public
     * @return void
     */
    public function save_incoming_sms($post)
    {
        $this->incoming_text->insert($post);
    }

    /**
     * Send Price info based on the query crop and location
     * @access public
     * @author mogetutu <imogetutu@gmail.com>
     * @param  string $message price sms #PRICE MAIZE NAIROBI
     * @return string crop locaiton weight and price of commodity queried
     */
    public function price_sms($message)
    {
        $split_message = explode(' ', $message);    // Assuming separator is ' ' - $message = Split message
        // Keyword, crop and location
        $keyword = $split_message[0];
        $crop = $this->sms_strip_crop($message);
        $location = end($split_message);
        // select action based on input,
        if (strtolower($keyword) == 'price') // for checking price e.g PRICE#tomato#nairobi
        {
            if ($crop == '' OR $location == '')
            {
                $reply = lang('error_message_price');
            }
            else
            {
                if ($crop && $location)
                {
                    // Save price info into price table
                    // $this->db->insert('prices', array('crop'=>$crop,'location'=>$location,'date'=>$this->date));
                    $row = $this->sms->get_crop_details($crop,$location);
                    if ($row)
                    {
                        $reply = "{$row->product_name} Kshs {$row->crop_price} per {$row->crop_weight} {$row->crop_unit} on {$this->date} in {$location}. powered by samsung.";
                    }
                    else
                    {
                        $reply = lang('error_message_price');
                    }

                }
                else
                {
                    $reply = lang('error_message_price');
                }
            }
        }
        else
        {
            $reply = lang('error_message_price');
        }
        self::send_sms($this->mobile_number, $reply);
    }


    /**
     * Send reply to person sending in A crop for sale
     * @author mogetutu <imogetutu@gmail.com>
     * @access public
     * @param  string $message sell sms SELL MAIZE 100Kgs 3200
     * @return string reply to user about selling on mfarm
     */
    public function sell_sms($message)
    {
        //split message sell maize 200kgs 2000
        list($keyword, $product, $weight, $price) = explode(' ', $message);
        #for checking price e.g SELL tomatoes 200kgs 2000
        //get user details from subscriebrs list
        $subscriber = $this->sms->get_subscriber_details($this->mobile_number);
        $product_id = $this->sms->get_product_id($product);
        if($subscriber == false)
        {
            $reply = lang('error_message_subscribe');
        }
        else
        {
            $user_id = $subscriber->id; //select subscribers id
            //get product and location details from user defined
            if($product == '' OR $weight == '' OR $price == '')
            {
                $reply = lang('error_message_sell');
            }
            else
            {
                // Split weight
                $units      = preg_replace('#[^a-z]#', '', $weight);
                $quantity   = preg_replace('#[^0-9]#', '', $weight);
                // Split price
                $currency   = preg_replace('#[^a-z]#', '', $price);
                $unit_price = preg_replace('#[^0-9]#', '', $price);
                //sellers details data array
                $data = array(
                    'user_id'        => $user_id,
                    'contact'        => $this->mobile_number,
                    'product_id'     => $product_id,
                    'product_weight' => $quantity,
                    'weight_unit'    => $units,
                    'unit_price'     => $unit_price,
                    'currency'       => $currency
                );
                $post = $this->post->insert($data);
                //update incomingsms table
                if ($post)
                {
                    $reply = lang('success_sell_message');
                }
            }
        }
        self::send_sms($this->mobile_number, $reply);
    }

    /**
     * Send buying text to user
     * @author mogetutu <imogetutu@gmail.com>
     * @access public
     * @param  string $message buying sms #BUY MAIZE 100Kgs
     * @return string reply with availablity of maize in the system
     */
    public function buy_sms($message)
    {
        list($keyword,$item,$quantity,$groupcode) = explode(" ", $message." ");    #Assuming separator is ' '
        if (strtoupper($keyword) == "BUY") #syntax for buying e.g BUY#tomato#quantity#EAG
        {
            //get user details from subscribers list
            $subscriber = $this->sms->get_subscriber_details($this->mno);
            $sub_id = $subscriber->sub_id;
            $location = $subscriber->location;
            if ($subscriber == FALSE)
            {
                $reply = lang('error_message_subscribe');
            }
            else
            {
                if ($item == '' OR $quantity == '')
                {
                    $reply = "keyword correct. item and quantity empty. MFARM LTD";
                }

                else
                {
                    $data = array(
                        'sub_id'       => $sub_id,
                        'buy_product'  => $item,
                        'buy_mno'      => $this->mno,
                        'buy_quantity' => $quantity,
                        'buy_location' => $location,
                        'date'         => $this->date,
                        'group_code'   => 0
                        );
                    $response = $this->sms->insert_buy_details($data);
                    if ($response)
                    {
                        $reply = lang('success_buy_message');
                    }
                }
            }
        }
        self::send_sms($this->mobile_number, $reply);
    }

    /**
     * Subscription SMS for mfarm accounts
     * @author mogetutu <imogetutu@gmail.com>
     * @access public
     * @param  string $message subscription sms #JOIN isaak mogetutu nairobi
     * @return string feedback on account creation
     */
    public function subscribe($message)
    {
        $this->view = false;
        list($keyword, $firstname, $lastname, $location, $aggregator_code) = explode(' ',$message);
        $aggregator_exists = $this->user->aggregator_exists($aggregator_code);
        $account_exists = $this->user->phone_number_exists($this->mobile_number);
        $location_id = $this->location->set_location($location);
        $username  = "{$firstname} {$lastname}";
        $email  = "{$this->mobile_number}@mfarm.co.ke";
        $password = self::_pass();
        $account_details = array(
                'first_name' => $firstname,
                'last_name'  => $lastname,
                'phone'      => $this->mobile_number,
                'location_id'=> $location_id,
                'active'     => 1,
                'aggregator' => $aggregator_exists
                );
        if($account_exists)
        {
            $user_id = $this->user->get_by('phone',$this->mobile_number)->id;
            $this->user->update($user_id, $account_details);
            if($aggregator_exists)
            {
                // $reply = lang('account_update_with_aggregator', array($firstname,$aggregator_code));
                $reply = "Hi {$firstname}, Your Account is now Aggregated with our Agent. With Aggregator Code {$aggregator_code}. For more call 0707933993.";
            }
            else
            {
                if($aggregator_code)
                {
                    // $reply = lang('error_account_update_with_aggregator', array($firstname, $aggregator_code));
                    $reply = "Hi {$firstname}, Your Account is already registered. The Aggregator Code {$aggregator_code} is NOT registered with us please call 0707933993 for help.";
                }
                else
                {
                    // $reply = lang('account_update', array($firstname));
                    $reply = "Hi {$firstname}, Your Account is already registered. Thank you for using MFARM. To sell send 'SELL CROP QUANTITY PRICE' to 3555. Please call 0707933993 for help.";
                }
            }
        }
        else
        {
            $registration = $this->ion_auth->register($username, $password, $email, $account_details);
            if($aggregator_exists)
            {
                // $reply = lang('account_registration_with_aggregator', array($firstname, $aggregator_code));
                $reply = "Thank you {$firstname} for Joining Mfarm Aggregation System with code {$aggregator_code}. To market your produce with your aggregator, Send SELL to 3555 for Kshs 1.00";
            }
            else
            {
                if($aggregator_code)
                {
                    // $reply = lang('error_account_registration_with_aggregator', array($firstname, $aggregator_code));
                    $reply = "Hi {$firstname}, Thank you for choosing M-Farm. The Aggregator {$aggregator_code} is NOT registered with us please call 0707933993 for help.";
                }
                else
                {
                    // $reply = lang('account_registration', array($firstname, $email, $password));
                    $reply = "Hi {$firstname}, Thank you for choosing M-Farm. Username:{$email}, Password: {$password} .To market your produce, Send SELL to 3555 for Kshs 1.00.";
                }
            }

        }
        self::send_sms($this->mobile_number, $reply);
    }

    public function default_sms($message)
    {
        $text = "To join send:\njoin firstname secondname location.\n For prices send:\nprice crop location.\n To sell produce:\nsell crop quantity price.\n\n Powered By Samsung.";
        $spam = 'FREE SMS: Dear MFarm Customer, we would like to inform you that we switched from 3555 (KES 10) to 3555 (KES 1). Powered By Samsung';
        $spam1 = 'FREE SMS: To join mfarm send: join firstname secondname location, to 3555 which is KES 1.00 eg. join john doe nairobi. Powered By Samsung.';
        self::send_sms( $this->mobile_number, $text );
    }
    /**
     * Encode text for sending over Shujaa Server
     * @link http://sms.shujaa.mobi
     */
    public function send_sms($mobile_number, $text, $redirect_url = '')
    {
        $mobile_number = ($mobile_number) ? $mobile_number : $this->mobile_number;
        $text          = ($text) ? $text : $this->message;
        $redirect_url  = ($redirect_url) ? $redirect_url : $this->input->post('redirect_url', true);
        self::curl_sms_action($mobile_number, $text, $redirect_url);
    }

    public function sms_order()
    {
        $post_id        = $this->input->post('post_id', true);
        $redirect_url   = $this->input->post('redirect_url', true);
        $farmer_contact = $this->post->get_by('id', $post_id)->contact;
        $buyer_contact  = $this->input->post('buyer_contact', true);
        $text           = $this->input->post('message', true);
        $message        = "{$text}. Reach me on {$buyer_contact}. M-Farm Kenya.";
        // Validation
        $this->form_validation->set_rules('buyer_contact', 'Contact', 'numeric|trim|required|min_length[12]|max_length[12]|xss_clean');
        $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');
        $order_details = array(
            'post_id'        => $post_id,
            'farmer_contact' => $farmer_contact,
            'buyer_contact'  => self::_format_phone_number($buyer_contact),
            'comments'       => $message
            );
        if($this->form_validation->run() == true)
        {
            $this->order_detail->insert($order_details);
            self::curl_sms_action($farmer_contact, $message, $redirect_url);
        }
        $this->data['message'] = 'Enter all Form Fields';
        redirect($redirect_url, 'refresh');

        // var_dump(array($buyer_contact, $message, $redirect_url));
    }
    /**
     * Generate random user password
     * @return string users password
     */
    private function _pass()
    {
        return strtolower(substr(str_shuffle(str_repeat('ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz0123456789',5)),0,5));
    }

    /**
     * Returns the middle part of the message
     * @param string $message SMS from sender
     * @return string(crop)
     */
    private function sms_strip_crop($message)
    {
        // Get items in message
        $item = explode(' ',$message);
        // First item in array
        $pattern[] = '/'.$item[0].'/';
        // Last item in array
        $pattern[] = '/'.end($item).'/';

        $output = preg_replace($pattern,'',$message);
        // Check if the there is a space between the middle elements of the string
        if (preg_match('/[^a-zA-Z0-9]+$/i', $output))
        {
            // Remove spaces,dashes,dots and hyphens
            $output = str_replace(' ', '', $output);
            $output = str_replace('-', '', $output);
            $output = str_replace('_', '', $output);
            $output = str_replace('.', '', $output);
            $output = str_replace('/', '', $output);
        }
        return $output;
    }
}