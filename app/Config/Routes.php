<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Penerbit
$routes->get('/Penerbit', 'ControllerPenerbit::index');
$routes->get('/Penerbit/form', 'ControllerPenerbit::form');
$routes->get('/Penerbit/edit/(:any)', 'ControllerPenerbit::edit/$1');
$routes->post('/Penerbit/create', 'ControllerPenerbit::create');
$routes->post('/Penerbit/hapus', 'ControllerPenerbit::hapus'); 

// Peminjaman
$routes->get('/peminjaman', 'ControllerPeminjaman::index');
$routes->get('/peminjaman/create', 'ControllerPeminjaman::create');
$routes->post('/peminjaman/save', 'ControllerPeminjaman::save');
$routes->get('/peminjaman/edit/(:num)', 'ControllerPeminjaman::edit/$1');
$routes->post('/peminjaman/update', 'ControllerPeminjaman::update');
$routes->get('/peminjaman/(:num)', 'ControllerPeminjaman::delete/$1');


// Login
$routes->get('/login', 'LoginController::index');
$routes->post('/login', 'LoginController::ceklogin');
$routes->get('/logout', 'LoginController::logout');