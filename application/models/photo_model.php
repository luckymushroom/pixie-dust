<?php if (! defined('BASEPATH')) exit('No direct script access');

class Photo_model extends MY_Model {

	public $before_create = array( 'timestamps' );

	public function __construct()
	{
	   parent::__construct();
	   //Do your magic here
	}

	/**
	 * Timestamps
	 */
	protected function timestamps($photo)
    {
        $photo['date_created'] = $photo['date_updated'] = date('Y-m-d H:i:s');
        return $photo;
    }

}