<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/index', 'Home::index');
$routes->get('/test', 'Home::test');
$routes->get('/main', 'MainController::index');
$routes->post('/save', 'MainController::save');
$routes->get('/delete/(:num)', 'MainController::delete/$1');
$routes->get('/edit/(:num)', 'MainController::edit/$1');