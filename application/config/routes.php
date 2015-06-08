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

$route['user/add_user'] = 'user/add_user';
$route['subcategories/(:any)'] = 'subcategories_front/get_subgategory/$1';
$route['change_tabs/(:any)'] = 'ajax/change_tabs/$1';
$route['ajax/filter_by_group']='ajax/filter_by_group/$1';
$route['ajax/filter_by_categories']='ajax/filter_by_categories/$1';
$route['admin/ajax/add_menu_item']='ajax/change_item_menu';
$route['admin/ajax/filter_by_categories']='ajax/filter_by_categories/$1';
$route['admin/ajax/filter_by_group']='ajax/filter_by_group/$1';
$route['admin/products/filter_by_category'] = 'ajax/filter_by_category';
$route['admin/products'] = 'product_adm/product';
$route['admin/add_product'] = 'product_adm/add_product';
$route['admin/add_category'] = 'category/add_category';
$route['admin/add_focus_product'] = 'category/add_focus_product';
$route['admin/subcategories'] = 'subcategories/get_subcat_list';
$route['admin/add_subcategory'] = 'subcategories/add_subcategory';
$route['admin/subcat'] = 'product_adm/filter_product';
$route['admin/add_item_menu']='menu/add_menu';
$route['admin/edit_menu']='menu/get_menu_list';
$route['user/add_product']='user/add_product';
$route['company_info']='user/company_info/$1';
$route['company_info/(:any)']='user/company_info/$1';
$route['account']='user/accout_user/$1';
$route['account/(:any)']='user/accout_user/$1';
$route['login'] = 'user/get_user';
$route['search']='search/get_search';

$route['cabinet'] = 'cabinet/user_data';
$route['add_product']='cabinet/add_product';
$route['subcategories']='subcategories_front/get_all_subcat';
$route['products'] = 'product/get_all_product';
$route['products/item/(:any)'] = 'product/get_product/$1';
$route['products/(:any)'] = 'product/get_products/$1';
$route['exit_user'] = 'user/exit_user';

$route['admin/exit_user'] = 'admin/exit_user';
$route['admin/category'] = 'category/get_category';
$route['admin/focus_product'] = 'category/focus_product';
$route['(:any)'] = 'main/index/$1';







/* End of file routes.php */
/* Location: ./application/config/routes.php */