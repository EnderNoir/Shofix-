<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Login', 'Login::index');
$routes->post('/Login', 'Login::authenticate');
$routes->get('/dmin', 'Admin::index');
$routes->get('/admin/login', 'Admin::login');
$routes->get('/add', 'Admin::add');
$routes->get('/signup', 'Signup::index');
$routes->post('/signup/save', 'Signup::save');
$routes->get('/dmin', 'Product::index');
$routes->post('/Admin/create', 'Admin::Create');
$routes->get('/Admin/edit/(:num)', 'Admin::edit/$1');
$routes->post('Admin/update/(:num)', 'Admin::update/$1');
$routes->get('/delete/(:num)', 'Admin::delete/$1');
$routes->get('/order/add(:num)', 'Home::add/$1');
$routes->get('/order/show(:num)', 'Home::show/$1');
$routes->get('checkout', 'Home::deliver');
