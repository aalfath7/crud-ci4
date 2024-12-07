<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Post::index');
$routes->get('/create', 'Post::create');
$routes->post('/create/store', 'Post::store');
