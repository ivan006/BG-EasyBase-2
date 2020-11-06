<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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

$route['default_controller'] = "table_page/database_c/database";
$route['404_override'] = '';




$route['table_page/erd'] = "table_page/erd_c";

$route['table_page/database'] = 'table_page/database_c/database';
$route['table_page/database_api'] = 'table_page/database_c/database_api';

$route['table_page/table/t/(:any)'] = 'table_page/table_c/index/$1';

$route['table_page/api/table/t/(:any)/insert'] = 'table_page/table_c/insert/$1';
$route['table_page/api/table/t/(:any)/fetch'] = 'table_page/table_c/fetch/$1';
$route['table_page/api/table/t/(:any)/delete'] = 'table_page/table_c/delete/$1';
$route['table_page/api/table/t/(:any)/edit'] = 'table_page/table_c/edit/$1';
$route['table_page/api/table/t/(:any)/update'] = 'table_page/table_c/update/$1';
$route['table_page/api/table/t/(:any)/fetch_where/h/(:any)/n/(:any)'] = 'table_page/table_c/fetch_where/$1/$2/$3';
// $route['table_page/api/table/t/(:any)/fetch_join_where/t/(:any)/h/(:any)/n/(:any)'] = 'table_page/table_c/fetch_join_where/$1/$2/$3/$4';
$route['table_page/api/table/t/(:any)/fetch_join_where/t/(:any)/h/(:any)/n/(:any)'] = 'table_page/table_c/fetch_join_where/$1/$2/$3/$4';

$route['table_page/record/t/(:any)/r/(:num)'] = 'table_page/record_c/index/$1/$2';

$route['mergetest'] = 'table_page/record_c/mergetest';
/* End of file routes.php */
/* Location: ./application/config/routes.php */
