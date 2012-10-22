<?php if (! defined('BASEPATH')) exit('No direct script access');

class Photo_model extends MY_Model
{

    //php 5 constructor
    function __construct()
    {
        parent::__construct();
    }
    function get_photos($id)
    {
        return $this->photo->get_many_by('post_id',$id);
    }

}