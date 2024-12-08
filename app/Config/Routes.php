<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Post::index');
$routes->get('/create', 'Post::create');
$routes->post('/create/store', 'Post::store');
$routes->get('/edit/(:segment)', 'Post::edit/$1');
$routes->post('/update/(:segment)', 'Post::update/$1');
$routes->get('/delete/(:segment)', 'Post::delete/$1');
