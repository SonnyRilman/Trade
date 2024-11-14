<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Rute halaman login sebagai halaman utama
$routes->get('/', 'AuthController::login');  // Mengarahkan ke metode login di AuthController
$routes->post('/authenticate', 'AuthController::authenticate');  // Untuk autentikasi saat login
$routes->get('/logout', 'AuthController::logout');  // Untuk logout

// Rute setelah login
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('/staff', 'Dashboard::staff', ['filter' => 'auth']);
$routes->get('/inventory', 'InventoryController::index', ['filter' => 'auth']);  // Menampilkan daftar inventaris
$routes->get('/inventory/add', 'InventoryController::add', ['filter' => 'auth']);  // Halaman untuk menambah inventaris
$routes->post('/inventory/save', 'InventoryController::save', ['filter' => 'auth']);  // Menyimpan inventaris baru
$routes->get('/statues', 'Dashboard::statues', ['filter' => 'auth']);
$routes->get('/reports', 'Dashboard::reports', ['filter' => 'auth']);
$routes->get('/orders', 'OrderController::index', ['filter' => 'auth']);  // Rute untuk daftar pesanan
$routes->get('/orders/create', 'OrderController::create', ['filter' => 'auth']);  // Rute untuk form pembuatan pesanan baru
$routes->post('/orders/store', 'OrderController::store', ['filter' => 'auth']);  // Rute untuk menyimpan pesanan baru
$routes->get('/shipping', 'Dashboard::shipping', ['filter' => 'auth']);      // Rute untuk pengelolaan pengiriman
