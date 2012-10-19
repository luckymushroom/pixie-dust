<?php
function smarty_function_uri($params,&$smarty) {
    if (!function_exists('uri')) {
        //return error message in case we can't get CI instance
        if (!function_exists('get_instance')) return "Can't get CI instance";
        $CI= &get_instance();
        $CI->load->library('uri');
    }

    if (isset($params['segment']))
      return $CI->uri->segment($params['segment']);

}
?>