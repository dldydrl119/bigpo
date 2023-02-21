<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['index'] = 'sbj_01/index';

$route['kyowon/admin'] = 'kyowon/admin/main';
$route['kyowon/syrup/admin'] = 'kyowon/syrup/admin/main';

$route['hyowon/admin'] = 'hyowon/admin/main';
$route['hyowon/syrup/admin'] = 'hyowon/syrup/admin/main';

$route['daoninternet/admin'] = 'daoninternet/admin/main';

$route['baroyeon/admin'] = 'baroyeon/admin/main';


$route['syrup/admin'] = 'syrup/admin/main';
$route['syrup/syrup/admin'] = 'syrupsyrup/admin/main';

$route['utopia/syrup/admin'] = 'utopia/syrup/admin/main';

$route['utopia/tmon/admin'] = 'utopia/tmon/admin/main';

$route['utopia_01/sbj/admin'] = 'utopia_01/sbj/admin/main';

$route['utopia_02/sbj/admin'] = 'utopia_02/sbj/admin/main';
