<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', function() {
    return view('home');
});

$routes->group('api', function($routes) {
    $routes->get('products', 'Api::products');
    $routes->get('transactions', 'Api::transactions');
});
