<?php
/**
 * A base controller for CodeIgniter with view autoloading, layout support,
 * model loading, asides/partials and per-controller 404
 *
 * @link http://github.com/jamierumbelow/codeigniter-base-controller
 * @copyright Copyright (c) 2012, Jamie Rumbelow <http://jamierumbelow.net>
 */

class MY_Controller extends CI_Controller
{

	/* --------------------------------------------------------------
	 * VARIABLES
	 * ------------------------------------------------------------ */

	/**
	 * The current request's view. Automatically guessed
	 * from the name of the controller and action
	 */
	protected $view = '';

	/**
	 * An array of variables to be passed through to the
	 * view, layout and any asides
	 */
	protected $data = array();

	/**
	 * The name of the layout to wrap around the view.
	 */
	protected $layout;

	/**
	 * An arbitrary list of asides/partials to be loaded into
	 * the layout. The key is the declared name, the value the file
	 */
	protected $asides = array();


	/**
	 * A list of models to be autoloaded
	 */
	protected $models = array( 'outgoing_text' );

	/**
	 * A formatting string for the model autoloading feature.
	 * The percent symbol (%) will be replaced with the model name.
	 */
	protected $model_string = '%_model';
	public $current_user = '';

	public function __construct()
	{
		parent::__construct();
		self::load_vars();
	}

 /* --------------------------------------------------------------
	 * VIEW RENDERING
	 * ------------------------------------------------------------ */

	/**
	 * Override CodeIgniter's despatch mechanism and route the request
	 * through to the appropriate action. Support custom 404 methods and
	 * autoload the view into the layout.
	 */
	public function _remap($method)
	{
		if (method_exists($this, $method))
		{
			call_user_func_array(array($this, $method), array_slice($this->uri->rsegments, 2));
		}
		else
		{
			if (method_exists($this, '_404'))
			{
				call_user_func_array(array($this, '_404'), array($method));
			}
			else
			{
				show_404(strtolower(get_class($this)).'/'.$method);
			}
		}

		$this->_load_view();
	}

	/**
	 * Automatically load the view, allowing the developer to override if
	 * he or she wishes, otherwise being conventional.
	 */
	protected function _load_view()
	{
		// If $this->view == FALSE, we don't want to load anything
		if ($this->view !== FALSE)
		{
			// If $this->view isn't empty, load it. If it isn't, try and guess based on the controller and action name
			$view = (!empty($this->view)) ? $this->view : $this->router->directory. $this->router->class . '/' . $this->router->method;

			// Load the view into $yield
			$data['yield'] = $this->load->view($view, $this->data, TRUE);

			// Do we have any asides? Load them.
			if (!empty($this->asides))
			{
				foreach ($this->asides as $name => $file)
				{
					$data['yield_'.$name] = $this->load->view($file, $this->data, TRUE);
				}
			}

			// Load in our existing data with the asides and view
			$data = array_merge($this->data, $data);
			$layout = FALSE;

			// If we didn't specify the layout, try to guess it
			if (!isset($this->layout))
			{
				if (file_exists(APPPATH . 'views/layouts/' . $this->router->class . '.tpl'))
				{
					$layout = 'layouts/' . $this->router->class;
				}
				else
				{
					if ($this->ion_auth->logged_in())
					{
						// Load Users layout
						$layout = "layouts/{$this->template}";
					}
					else
					{
						 // Load site
						$layout = 'layouts/application';
					}
				}
			}
			// If we did, use it
			else if ($this->layout !== FALSE)
			{
				$layout = $this->layout;
			}

			// If $layout is FALSE, we're not interested in loading a layout, so output the view directly
			if ($layout == FALSE)
			{
				$this->output->set_output($data['yield']);
			}

			// Otherwise? Load away :)
			else
			{
				$this->load->view($layout, $data);
			}
		}
	}

	public function load_vars()
	{
		$this->_load_models();
		$this->data['environment'] = ENVIRONMENT;
		// Load application config
		$this->load->config('application');
		$this->load->library('ion_auth');
		$this->load->helper(array('mfarm','date','inflector'));
		$this->current_user = $this->session->userdata('user_id');
		$this->data['code'] = '';
		$this->data['seg_one'] = $this->uri->segment(1);
		$this->data['seg_two'] = $this->uri->segment(2);
        $this->data['seg_three'] = $this->uri->segment(3);
		$this->data['seg_four'] = $this->uri->segment(4);
		$this->data['uri_string'] = $this->uri->uri_string();
		$this->data['flash_message'] = $this->session->flashdata('message');
		$this->data['user_session'] = $this->current_user;
        if($this->current_user)
        {
            // $this->group = $this->ion_auth->get_group()->name;
            $this->template = $this->ion_auth->get_group()->template;
        }
	}

    public function dd($value)
    {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
    }

	/* --------------------------------------------------------------
     * MODEL LOADING
     * ------------------------------------------------------------ */

    /**
     * Load models based on the $this->models array
     */
    private function _load_models()
    {
        foreach ($this->models as $model)
        {
            $this->load->model($this->_model_name($model), $model);
        }
    }

    /**
     * Returns the loadable model name based on
     * the model formatting string
     */
    protected function _model_name($model)
    {
        return str_replace('%', $model, $this->model_string);
    }

    /**
     * This function sends out $text for sending over Shujaa Server
     */
    public function curl_sms_action($mobile_number, $text, $redirect_url)
    {
        $this->view = false;
        $network = ($this->network = 'Safaricom Short Code' OR $this->network == 'Safaricom Bulk') ? 'Safaricom' : 'Airtel';
        // Start session (also wipes existing/previous sessions)
        $this->load->library('curl');
        $this->curl->create(TARGET_URL);

        // Options
        $this->curl->options(array(CURLOPT_BUFFERSIZE => 10, CURLOPT_POST => true));

        // Login to HTTP user authentication
        $this->curl->http_login(SMS_USER, SMS_PASS);

        // Post - If you do not use post, it will just run a GET request
        $post = array(
            'username'    => SMS_USER,
            'password'    => SMS_PASS,
            'account'     =>'live',
            'source'      => 3555,
            'destination' => $mobile_number,
            'message'     => $text,
            'network'     => $network
            );
        // Save Outgoing text
        self::save_outgoing_sms($post);
        $this->curl->post($post);
        // Execute - returns response
        $response = $this->curl->execute();
        list($curl_status) = explode(':', $response);

        if($curl_status)
        {
            $this->session->set_flashdata('message', "Message sent! {$response}");
            redirect($redirect_url);
        }
        else
        {
            $this->session->set_flashdata('message', "Message NOT sent! {$response}");
            redirect($redirect_url);
        }
    }
    /**
     * Save outgoing messages
     */
    public function save_outgoing_sms($post)
    {
        $save = array(
            'destination' => element('destination', $post),
            'message'     => element('message', $post),
            'network'     => $this->network
            );
        $this->outgoing_text->insert($save);
    }
    public function _format_phone_number($phone_string)
    {
        $phone_string = urldecode($phone_string);
        $this->view = false;
        $phone_string = substr($phone_string, -9);
        $phone_string = preg_replace('/\s+/', '', $phone_string);
        return $phone_string = $this->config->item('country_code','ion_auth').$phone_string;
    }
}