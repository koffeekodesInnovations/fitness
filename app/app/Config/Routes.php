<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/services', 'Home::services');
$routes->get('/gallery', 'Home::gallery');
$routes->get('/contact', 'Home::contact');
$routes->get('/calculator', 'Home::calculator');
$routes->post("send-mail", "EmailController::sendMail");

