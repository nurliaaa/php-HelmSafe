<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Loker');
$routes->setDefaultMethod('display');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'c_home::display');

$routes->get('/', 'c_main::display');
$routes->get('/pageLoker', 'c_main::loker');
$routes->get('/pageCard', 'c_main::card');
$routes->get('/pageSave', 'c_main::save');


// $routes->get('/c_mahasiswa', 'c_mahasiswa::dataMhs');
// $routes->get('/c_berita', 'c_mahasiswa::berita');
// $routes->get('/inputData', 'c_mahasiswa::addMahasiswa');
// $routes->post('/inputData/tambah', 'c_mahasiswa::inputMhs');
// $routes->get('/c_mahasiswa/detail/(:num)', 'c_mahasiswa::viewDetail/$1');
// $routes->get('/c_mahasiswa/delete/(:num)', 'c_mahasiswa::deleteMhs/$1');
// $routes->get('/c_mahasiswa/edit/(:num)', 'c_mahasiswa::editMhs/$1');
// $routes->post('/c_mahasiswa/editMahasiswa', 'c_mahasiswa::updateMhs');
// $routes->post('/c_mahasiswa/searchMahasiswa', 'c_mahasiswa::searchMhs');

// $routes->get('/grafik-mhs', 'c_mahasiswa::DataGrafik');

// $routes->add('/read', 'c_mahasiswa::displayExcel');

/*
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
