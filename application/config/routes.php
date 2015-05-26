<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
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
  | There area two reserved routes:
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



$route['default_controller'] = "main/index";

$route['admin'] = 'admin/get_admin';
$route['admin/(:any)'] = 'admin/admin_pages/$1';
//$route['admin/(:any)'] = 'admin/admin_page_ajax';
$route['user/add_user'] = 'user/add_user';
$route['change_tabs/(:any)'] = 'ajax/change_tabs/$1';
$route['admin/add_category']='category/add_category';
$route['admin/add_focus_product']='category/add_focus_product';
$route['admin/subcategories']='subcategories/get_subcat_list';
$route['admin/add_subcategory']='subcategories/add_subcategory';
$route['login'] = 'user/get_user';
//$route['subcategories']='subcategories/show_subcategories';
$route['products']='product/get_all_product';
$route['products/item/(:any)']='product/get_product/$1';
$route['exit_user'] = 'user/exit_user';
//$route['admin/change_type'] = 'subcategories/change_type';
$route['admin/exit_user'] = 'admin/exit_user';
$route['admin/category']='category/get_category';
$route['admin/focus_product']='category/focus_product';
$route['(:any)'] = 'main/index/$1';







/* End of file routes.php */
/* Location: ./application/config/routes.php */