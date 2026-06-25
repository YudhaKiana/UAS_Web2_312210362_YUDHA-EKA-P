<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

// Endpoint RESTful API untuk E-Library
$routes->resource('kategori');
$routes->resource('buku');

// Endpoint untuk Auth (Login & Register)
$routes->post('register', 'Auth::register');
$routes->post('login', 'Auth::login');

// PENANGANAN CORS: Menangkap request "preflight" (OPTIONS) dari Axios agar tidak 404
$routes->options('(:any)', function() {
    $response = response();
    $response->setHeader('Access-Control-Allow-Origin', '*');
    $response->setHeader('Access-Control-Allow-Headers', 'Content-Type, Authorization, X-Requested-With');
    $response->setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, DELETE');
    return $response;
});