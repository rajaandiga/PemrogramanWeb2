<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Set the default route to 'Anggota::index' for the home page
$routes->get('/', 'Anggota::index');

// Route untuk menampilkan daftar anggota
$routes->get('/anggota', 'Anggota::index');

// Rute untuk menampilkan form tambah anggota
$routes->get('/anggota/tambah', 'Anggota::add');

// Rute untuk menangani pengiriman form tambah anggota
$routes->post('/anggota/add', 'Anggota::add');

// Rute untuk mencari anggota berdasarkan kata kunci
$routes->post('/anggota/search', 'Anggota::search');

// Rute lain sesuai kebutuhan aplikasi Anda
service('auth')->routes($routes);  // Rute untuk otentikasi, jika diperlukan
