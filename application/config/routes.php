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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['admin'] = 'backend/admin';
$route['admin/masyarakat'] = 'backend/masyarakat';

$route['admin/masyarakat/tambahmasyarakat'] = 'backend/masyarakat/tambahmasyarakat';
$route['admin/masyarakat/hapusmasyarakat/(:any)'] = 'backend/masyarakat/hapusmasyarakat/$1';
$route['admin/masyarakat/editmasyarakat/(:any)'] = 'backend/masyarakat/editmasyarakat/$1';


$route['admin/petugas'] = 'backend/petugas';
$route['admin/petugas/tambahpetugas'] = 'backend/petugas/tambahpetugas';
$route['admin/petugas/hapuspetugas/(:any)'] = 'backend/petugas/hapuspetugas/$1';

$route['admin/barang'] = 'backend/barang';
$route['admin/barang/hapusbarang/(:any)'] = 'backend/barang/hapusbarang/$1';

$route['admin/lelang'] = 'backend/lelang';
$route['admin/lelang/hapuselalang/(:any)'] = 'backend/lelang/hapuslelang/$1';