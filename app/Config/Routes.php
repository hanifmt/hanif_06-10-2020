<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

// Kabupaten
$routes->get('/kabupaten', 'KabupatenController::index');
$routes->get('/kabupaten/create', 'KabupatenController::create');
$routes->post('/kabupaten/store', 'KabupatenController::store');
$routes->get('/kabupaten/edit/(:num)', 'KabupatenController::edit/$1');
$routes->post('/kabupaten/update/(:num)', 'KabupatenController::update/$1');
$routes->get('/kabupaten/delete/(:num)', 'KabupatenController::delete/$1');

// Kecamatan
$routes->get('/kecamatan', 'KecamatanController::index');
$routes->get('/kecamatan/create', 'KecamatanController::create');
$routes->post('/kecamatan/store', 'KecamatanController::store');
$routes->get('/kecamatan/edit/(:num)', 'KecamatanController::edit/$1');
$routes->post('/kecamatan/update/(:num)', 'KecamatanController::update/$1');
$routes->get('/kecamatan/delete/(:num)', 'KecamatanController::delete/$1');

// Siswa
$routes->get('/siswa', 'SiswaController::index');
$routes->get('/siswa/create', 'SiswaController::create');
$routes->post('/siswa/store', 'SiswaController::store');
$routes->get('/siswa/edit/(:num)', 'SiswaController::edit/$1');
$routes->post('/siswa/update/(:num)', 'SiswaController::update/$1');
$routes->get('/siswa/delete/(:num)', 'SiswaController::delete/$1');



/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
