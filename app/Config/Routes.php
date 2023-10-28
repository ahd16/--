<?php

use CodeIgniter\Router\RouteCollection;

/**php
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Anggota
$routes->get('/Anggota', 'ControllerAnggota::index');
$routes->get('/Anggota/form', 'ControllerAnggota::form');
$routes->get('/Anggota/edit/(:any)', 'ControllerAnggota::edit/$1');
$routes->post('/Anggota/create', 'ControllerAnggota::create');
$routes->post('/Anggota/hapus', 'ControllerAnggota::hapus');

// Buku
$routes->get('/Buku', 'ControllerBuku::index');
$routes->get('/Buku/form', 'ControllerBuku::form');
$routes->get('/Buku/edit/(:any)', 'ControllerBuku::edit/$1');
$routes->post('/Buku/create', 'ControllerBuku::create');
$routes->post('/Buku/hapus', 'ControllerBuku::hapus');