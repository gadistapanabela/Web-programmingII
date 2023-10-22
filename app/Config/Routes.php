<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Latihan1::index');

$routes->get("penilaian/(:num)/(:num)", "Latihan1::penjumlahan/$1/$2");

$routes->get("web", "web::index");
$routes->get("about", "web::about");