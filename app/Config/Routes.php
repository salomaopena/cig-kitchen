<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('/stop', 'Main::stop');
$routes->get('/delete_order/(:alphanum)', 'Main::delete_order/$1');
$routes->get('/delete_order_confirm/(:alphanum)', 'Main::delete_order_confirm/$1');
