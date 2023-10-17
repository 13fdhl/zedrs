<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::login');
$routes->get('/dashboard', 'Page::dashboard');
$routes->get('/profil', 'Page::profil');
$routes->get('/chatbot', 'Page::chatbot');
$routes->get('/bantuan', 'Page::bantuan');