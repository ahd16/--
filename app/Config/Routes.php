<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Kategori
$routes->get('/Kategori', 'ControllerKategori::index');
$routes->get('/Kategori/form', 'ControllerKategori::form');
$routes->get('/Kategori/edit/(:any)', 'ControllerKategori::edit/$1');
$routes->post('/Kategori/create', 'ControllerKategori::create');
$routes->post('/Kategori/hapus', 'ControllerKategori::hapus'); 

// Koleksi Buku
$routes->get('/Koleksi', 'ControllerKoleksi::index');
$routes->get('/Koleksi/form', 'ControllerKoleksi::form');
$routes->get('/Koleksi/edit/(:any)', 'ControllerKoleksi::edit/$1');
$routes->post('/Koleksi/create', 'ControllerKoleksi::create');
$routes->post('/Koleksi/hapus', 'ControllerKoleksi::hapus'); 