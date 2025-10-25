<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ===================
// HALAMAN UTAMA
// ===================
$routes->get('/', function() {
    return view('home');
});

// ===================
// GROUP: PRODUCTS (CRUD)
// ===================
$routes->group('products', function($routes) {
    $routes->get('/', 'ProductController::index');              // List produk
    $routes->get('create', 'ProductController::create');        // Form tambah
    $routes->post('store', 'ProductController::store');         // Simpan produk baru
    $routes->get('edit/(:num)', 'ProductController::edit/$1');  // Form edit produk
    $routes->post('update/(:num)', 'ProductController::update/$1'); // Simpan update produk
    $routes->get('delete/(:num)', 'ProductController::delete/$1');  // Hapus produk
});

// ===================
// GROUP: TRANSACTIONS (CRUD)
// ===================
$routes->group('transactions', function($routes) {
    $routes->get('/', 'TransactionController::index');              // List transaksi
    $routes->get('create', 'TransactionController::create');        // Form tambah transaksi
    $routes->post('store', 'TransactionController::store');         // Simpan transaksi
    $routes->get('edit/(:num)', 'TransactionController::edit/$1');  // Form edit transaksi
    $routes->post('update/(:num)', 'TransactionController::update/$1'); // Update transaksi
    $routes->get('delete/(:num)', 'TransactionController::delete/$1');  // Hapus transaksi
});

// ===================
// GROUP: API
// ===================
$routes->group('api', function($routes) {
    $routes->get('products', 'Api::products');          // GET /api/products
    $routes->get('transactions', 'Api::transactions');  // GET /api/transactions
});
