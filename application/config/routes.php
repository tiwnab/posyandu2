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
$route['default_controller'] = 'frontController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'loginController';
$route['login/action'] = 'loginController/action';
$route['logout'] = 'loginController/logout';
$route['berita'] = 'frontController/berita';
$route['kms'] = 'frontController/kms';
$route['kontak'] = 'frontController/kontak';
$route['donasi'] = 'frontController/donasi';
$route['kontak/insert'] = 'frontController/insert_kontak';
$route['berita/view/(:num)'] = 'frontController/view_berita/$1';
$route['buku/autocomplete'] = 'frontController/autocomplete_koleksi';
$route['search/no_kk'] = 'frontController/search_by_no_kk';

#petugas
$route['petugas'] = 'petugasController/dashboard';
$route['petugas/pengguna/add'] = 'petugasController/add_pengguna';
$route['petugas/pengguna/insert'] = 'petugasController/insert_pengguna';
$route['petugas/pengguna/list'] = 'petugasController/list_pengguna';
$route['petugas/berita/add'] = 'petugasController/add_berita';
$route['petugas/berita/insert'] = 'petugasController/insert_berita';
$route['petugas/berita/list'] = 'petugasController/list_berita';
$route['petugas/berita/content/(:any)'] = 'petugasController/content_berita/$1';
$route['petugas/orangtua/list'] = 'petugasController/list_orangtua';
$route['petugas/orangtua/getbalita/(:any)'] = 'petugasController/get_balita/$1';
$route['petugas/orangtua/export'] = 'petugasController/export_data_orangtua';


#kader
$route['kader'] = 'kaderController/dashboard';
$route['kader/orangtua/add'] = 'kaderController/add_orangtua';
$route['kader/orangtua/insert'] = 'kaderController/insert_orangtua';
$route['kader/orangtua/list'] = 'kaderController/list_orangtua';
$route['kader/orangtua/getbalita/(:any)'] = 'kaderController/get_balita/$1';
$route['kader/orangtua/export'] = 'kaderController/export_data_orangtua';
$route['kader/berat_badan/add'] = 'kaderController/add_berat_badan';
$route['kader/berat_badan/insert'] = 'kaderController/insert_berat_badan';
$route['kader/data_imunisasi/add'] = 'kaderController/add_data_imunisasi';
$route['kader/data_imunisasi/insert'] = 'kaderController/insert_data_imunisasi';
$route['kader/berita/add'] = 'kaderController/add_berita';
$route['kader/berita/insert'] = 'kaderController/insert_berita';
$route['kader/berita/list'] = 'kaderController/list_berita';
$route['kader/berita/content/(:any)'] = 'kaderController/content_berita/$1';
$route['kader/imunisasi/add'] = 'kaderController/add_imunisasi';
$route['kader/imunisasi/insert'] = 'kaderController/insert_imunisasi';
$route['kader/imunisasi/list'] = 'kaderController/list_imunisasi';


#kms
$route['kms/list'] = 'kmsController/list_kms';
$route['kms/list/export'] = 'kmsController/export_data_kms';
$route['kms/getorangtua/(:any)'] = 'kmsController/get_orangtua/$1';
