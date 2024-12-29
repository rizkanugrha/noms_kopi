<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


/** route auth user */
$routes->get('/', 'Auth::login');
$routes->match(['GET', 'POST'], 'auth/login', 'Auth::login');
$routes->match(['GET', 'POST'], 'auth/register', 'Auth::register');
$routes->get('auth/logout', 'Auth::logout');

/** route dashboard user */
$routes->group('dashboard', function ($routes) {
    $routes->get('index', 'Dashboard::index', ['filter' => 'auth']);
    $routes->get('/', 'Dashboard::index', ['filter' => 'auth']);
    $routes->get('makanan', 'Dashboard::makanan', ['filter' => 'auth']);
    $routes->get('minuman', 'Dashboard::minuman', ['filter' => 'auth']);
    $routes->get('snack', 'Dashboard::snack', ['filter' => 'auth']);

});

/** route order */
$routes->group('order', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'Order::index');
    $routes->post('createOrder', 'Order::createOrder'); // Rute untuk membuat order
    $routes->get('showQrCode/(:num)', 'Order::showQrCode/$1'); // Rute untuk menampilkan QR Code (view)
    $routes->get('pay/(:num)', 'Order::pay/$1');
    $routes->get('receipt/(:num)', 'Order::receipt/$1');// Rute untuk menampilkan struk pembayaran
});


/** route admin  */
$routes->group('admin', ['filter' => 'authAdmin'], function ($routes) {
    $routes->get('/', 'admin\Admin::index');
    $routes->get('index', 'admin\Admin::index');
    $routes->post('update-status/(:num)', 'admin\Admin::updateOrderStatus/$1');
    $routes->get('logout', 'admin\AuthAdmin::logout');
});

$routes->match(['GET', 'POST'], 'admin/login', 'admin\AuthAdmin::login');

