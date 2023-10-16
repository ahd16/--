<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/Pengguna', 'PenggunaController::index');
$routes->get('/Pengguna/form', 'PenggunaController::form');
$routes->get('/Pengguna/Edit/(:any)', 'PenggunaController::edit/$1');
$routes->post('/Pengguna/create', 'PenggunaController::create');
$routes->post('/Pengguna/Hapus', 'PenggunaController::hapus');