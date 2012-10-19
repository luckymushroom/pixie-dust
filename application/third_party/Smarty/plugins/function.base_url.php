<?php
function smarty_function_base_url($params,&$smarty) {
    if (!function_exists('base_url')) {
        //return error message in case we can't get CI instance
        if (!function_exists('get_instance')) return "Can't get CI instance";
        $CI= &get_instance();
        $CI->load->helper('url');
    }

    return base_url();

}
?>