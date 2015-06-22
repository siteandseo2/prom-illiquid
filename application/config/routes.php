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

$route['ajax/filter_by_group'] = 'ajax/filter_by_group/$1';
$route['ajax/filter_by_categories'] = 'ajax/filter_by_categories/$1';
$route['(:any)/ajax/change_location'] = 'ajax/change_location';
$route['ajax/change_location'] = 'ajax/change_location';
$route['ajax/change_role'] = 'ajax/change_role';
$route['user/add_user'] = 'user/add_user';
$route['admin/ajax/add_menu_item'] = 'ajax/change_item_menu';
$route['admin/ajax/filter_by_categories'] = 'ajax/filter_by_categories/$1';
$route['admin/ajax/filter_by_group'] = 'ajax/filter_by_group/$1';
$route['account/ajax/change_location'] = 'ajax/change_location';
$route['change_tabs/(:any)'] = 'ajax/change_tabs/$1';
$route['(:any)/ajax/change_role'] = 'ajax/change_role';

$route['admin'] = 'admin/admin/get_admin';
$route['admin/(:any)'] = 'admin/admin/admin_pages/$1';
$route['admin/products/filter_by_category'] = 'ajax/filter_by_category';
$route['admin/products'] = 'admin/product/products';
$route['admin/add_product'] = 'admin/product/add_product';
$route['admin/add_category'] = 'admin/category/add_category';
$route['admin/add_focus_product'] = 'admin/category/add_focus_product';
$route['admin/subcategories'] = 'admin/subcategories/get_subcat_list';
$route['admin/filter_cat'] = 'admin/subcategories/filter_cat';
$route['admin/add_subcategory'] = 'admin/subcategories/add_subcategory';
$route['admin/subcat'] = 'admin/product/filter_product';
$route['admin/add_item_menu'] = 'admin/menu/add_menu';
$route['admin/edit_menu'] = 'admin/menu/get_menu_list';
$route['admin/slider'] = 'admin/admin/edit_slider';
$route['admin/slide_add'] = 'admin/admin/slide_add';
$route['admin/exit_user'] = 'admin/admin/exit_user';
$route['admin/category'] = 'admin/category/get_category';
$route['admin/focus_product'] = 'admin/category/focus_product';
$route['admin/partners'] = 'admin/admin/partners';
$route['admin/add_partner'] = 'admin/admin/add_partner';
$route['admin/new_orders'] = 'admin/admin/get_order';
$route['admin/order_status'] = 'admin/order/order_status';

$route['subcategories/(:any)'] = 'subcategories/get_subgategory/$1';
$route['subcategories'] = 'subcategories/get_all_subcat';
$route['user/add_product'] = 'user/add_product';
$route['company_info/(:any)'] = 'user/company_info/$1';
$route['company_info'] = 'user/company_info/';
$route['view_company/(:any)'] = 'user/view_company/$1';
$route['account'] = 'user/account_user/$1';
$route['account/(:any)'] = 'user/account_user/$1';
$route['login'] = 'user/get_user';
$route['edit_user_data']='user/edit_user_data';
$route['edit_company_data']='user/edit_company_data';
$route['exit_user'] = 'user/exit_user';
$route['add_commit']='user/add_commit';
$route['add_order'] = 'order/add_order';
$route['search'] = 'search/search_name';
$route['search/prod'] = 'search/get_search/$1';
$route['search/(:any)'] = 'search/get_search/$1';
$route['cabinet'] = 'cabinet/user_data';
$route['add_product'] = 'cabinet/add_product';
$route['edit_item'] = 'product/edit_item';
$route['set_item'] = 'product/set_item';
$route['products'] = 'product/get_products/$1';
$route['prod/all']='product/get_all_product/$1';
$route['prod/all/(:any)']='product/get_all_product/$1';
$route['products/item/(:any)'] = 'product/get_product/$1';
$route['products/(:any)'] = 'product/get_products/$1';


$route['(:any)'] = 'main/index/$1';







/* End of file routes.php */
/* Location: ./application/config/routes.php */