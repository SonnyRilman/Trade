<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Dashboard::index'); 
$routes->get('/staff', 'Dashboard::staff'); 
$routes->get('/inventory', 'Dashboard::inventory'); 
$routes->get('/statues', 'Dashboard::statues'); 
$routes->get('/reports', 'Dashboard::reports'); 
$routes->get('/orders', 'Dashboard::orders'); 
$routes->get('/shiping', 'Dashboard::shiping'); 