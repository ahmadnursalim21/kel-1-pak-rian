<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/blog', 'Blog::index');
$routes->get('/coba', 'Coba::index');
$routes->get('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->get('/pola-soal-cpns-2024', 'Cpns::index');
$routes->get('/daftar-formasi-cpns-badan-perencanaan-pembangunan-nasional', 'Cpns::daftar_formasi');
$routes->get('/daftar-formasi-cpns-badan-pengawas-obat-dan-makanan', 'Cpns::daftar_formasi_cpns_badan_pengawas_obat_dan_makanan');
$routes->get('/formasi-cpns-s1-teknik-bangunan-dan-landasan', 'Cpns::daftar_formasi_cpns_s1_teknik_bangunan');
