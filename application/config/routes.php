<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'dashboard';
$route['404_override'] = 'erg/Not_Found404';
$route['translate_uri_dashes'] = FALSE;


$route['login'] = 'admin/auth/login';
$route['register'] = 'admin/auth/create_user';

$route['admin'] = 'admin/erg';

//Backup Route
$route['admin/dbbackup'] = 'admin/erg/dbbackup';

//Member Route
$route['admin/admin'] = 'admin/member/admin';
$route['admin/lecturer'] = 'admin/member/lecturer';
$route['admin/trainee'] = 'admin/member/trainee';
$route['admin/new'] = 'admin/member/new';
$route['admin/graduated'] = 'admin/member/graduated';
$route['admin/chief'] = 'admin/member/chief';

//Profile Route
$route['admin/profile/(:any)'] = 'admin/member/profile/$1';
$route['admin/profile/edit/(:any)'] = 'admin/member/edit_profile/$1';
$route['admin/profile/change_password/(:any)'] = 'admin/member/change_password/$1';

//Meeting Route
$route['admin/meeting'] = 'admin/meeting/list';
$route['admin/meeting/add'] = 'admin/meeting/add_meeting';
$route['admin/meeting/edit/(:any)'] = 'admin/meeting/edit_meeting/$1';
$route['admin/meeting/delete/(:any)'] = 'admin/meeting/delete_meeting/$1';

//Products Route
$route['admin/products'] = 'admin/products/list/';

//News Route
$route['admin/news'] = 'admin/news/list/';

//Image Route
$route['admin/image'] = 'admin/image/list/';

//Award Route
$route['admin/award'] = 'admin/award/list/';

//Tools Route
$route['admin/tools'] = 'admin/tools/list';

//News Route

$route['news'] = 'erg/news/list';
$route['news/list'] = 'erg/news/list';
$route['news/list/(:any)'] = 'erg/news/list/$1';

$route['news/(:any)'] = 'erg/news/index/$1';