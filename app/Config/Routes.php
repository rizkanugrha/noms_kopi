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
    $routes->get('index', 'Dashboard::index');
    $routes->get('makanan', 'Dashboard::makanan');
    $routes->get('minuman', 'Dashboard::minuman');
    $routes->get('snack', 'Dashboard::snack');
});

/** route admin auth */
$routes->match(['GET', 'POST'], 'admin/login', 'Auth::login');
$routes->get('auth/logout', 'Auth::logout');
