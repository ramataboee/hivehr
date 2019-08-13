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
//$route['preart_register'] = 'patients';
//$route['view_client/(:any)']['put'] = 'hts/record';

$route['done_registration'] = 'Clients/view_client_profile';
$route['artpatients'] = 'Patients/artpatients';
$route['move_to_art'] = 'Patients/move_to_art';
$route['view_patient_profile'] = 'Patients/view_patient_profile';
$route['preart'] = 'Patients/view_preart';
$route['returning_client'] = 'Clients/returning_clients';
//$route['done_registration'] = 'Clients/view_client_profile';
$route['view_client_profile'] = 'Clients/view_client_profile';
$route['new_client'] = 'Clients/register_client';
$route['default_controller'] = 'Dashboard/view';
$route['(:any)'] = 'Dashboard/view/$1';
/*
//$route['^(rbac)/(.+)$'] = 'Ezmanage/a';
//$route['default_controller'] = 'Users/login_view';
$route['(:any)'] = 'Dashboard/view/$1';
*/
