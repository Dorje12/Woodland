<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
        require SYSTEMPATH . 'Config/Routes.php';
}

/*
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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$myroutes = [];
//$myroutes['login'] = 'auth::index';
//$myroutes['register'] = 'auth::register';
$myroutes['courses'] = 'home::courses';
$myroutes['about'] = 'home::about';
$myroutes['contact'] = 'home::contact';
$myroutes['community'] = 'home::community';

$myroutes['dashboard'] = 'Index::index';

$routes->map($myroutes);

$routes->group('', ['filter' => 'isLoggedIn'], function ($routes) {
        $routes->get('dashboard', 'Index::index');
        $routes->get('dashboard/courses', 'dashboard/courses::index');
        $routes->get('dashboard/attendance', 'dashboard/attendance::index');
        $routes->get('dashboard/calender', 'dashboard/calender::index');
        $routes->get('dashboard/time_table', 'dashboard/time_table::index');
        $routes->get('dashboard/result', 'dashboard/result::index');
        $routes->get('dashboard/users', 'dashboard/users::index');
        $routes->get('dashboard/users/add_User', 'dashboard/users/::add_User');
        
      
});

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
        require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
