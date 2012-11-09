<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Academic Free License version 3.0
 *
 * This source file is subject to the Academic Free License (AFL 3.0) that is
 * bundled with this package in the files license_afl.txt / license_afl.rst.
 * It is also available through the world wide web at this URL:
 * http://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * licensing@ellislab.com so we can send you a copy immediately.
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2012, EllisLab, Inc. (http://ellislab.com/)
 * @license		http://opensource.org/licenses/AFL-3.0 Academic Free License (AFL 3.0)
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller']                       = 'site/blog';
$route['404_override']                             = '';

$route['market']                                   = 'site/index';
$route['market/(:any)']                            = 'site/index/$1';
$route['marketplace']                              = 'site/index';
$route['stories']                                  = 'blog';
$route['blog']                                     = 'site/blog';
$route['blog/post/(:any)']                         = 'site/post/$1';
$route['index']                                    = 'site/blog';
$route['blog/page']                                = 'site/blog';
$route['blog/page/(:num)']                         = 'site/blog/$1';
$route['admin/blog/(:num)/edit']                   = 'admin/blog/edit/$1';
$route['farmers/page']                             = 'farmers/index';
$route['farmers/page/(:num)']                      = 'farmers/index/$1';
$route['faq']                                      = 'site/faq';
$route['price']                                    = 'site/price';
$route['price/(:any)']                             = 'site/price/$1';
$route['press']                                    = 'site/press';
$route['about']                                    = 'site/about';
$route['team']                                     = 'site/team';
$route['services']                                 = 'site/services';
$route['contact']                                  = 'site/contact';
$route['ktn/index.xml']                            = 'site/ktn';
$route['contact_send']                             = 'site/contact_send';
$route['admin']                                    = 'auth/login/';
$route['admin/users/(:num)']                       = 'admin/users/show/$1';
$route['admin/users/(:num)/edit']                  = 'admin/users/edit/$1';
$route['sign-in']                                  = 'auth/login/';
$route['users/(:num)']                             = 'users/index/$1';
$route['farmer/posts/(:num)']                      = 'farmer/posts/show/$1';
$route['admin/posts/(:num)']                       = 'admin/posts/show/$1';
$route['users/(:num)/farmers']                     = 'farmers/show/$1';
$route['users/(:num)/posts']                       = 'admin/posts/show/$1';
$route['admin/posts/(:num)/products/(:num)/users'] = 'admin/posts/show_many/$2/$1';
$route['aggregator/users/(:num)']                  = 'aggregator/users/index/$1';
$route['aggregator/users/(:num)/(:num)']           = 'aggregator/users/show/$1/$2';
$route['aggregator/posts/(:num)']                  = 'aggregator/posts/show/$1';
$route['aggregator/posts/(:num)/user']             = 'aggregator/posts/user/$1';
/* End of file routes.php */
/* Location: ./application/config/routes.php */