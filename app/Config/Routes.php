<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(false);
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
$routes->get('page/tos', 'Page::tos');
$routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel/(:any)', 'Artikel::view/$1');
<<<<<<< HEAD
$routes->group('admin', function($routes) {
=======
$routes->group('admin', function ($routes) {
>>>>>>> 915420f3e91ca833bfbfddb78a67ac72e9dade4d
    $routes->get('artikel', 'Artikel::admin_index');
    $routes->add('artikel/add', 'Artikel::add');
    $routes->add('artikel/edit/(:any)', 'Artikel::edit/$1');
    $routes->get('artikel/delete/(:any)', 'Artikel::delete/$1');
});
$routes->get('/layout', 'Artikel::main');
<<<<<<< HEAD
$routes->get('/user/login', 'User::login');
$routes->post('user/login', 'User::login');
$routes->get('user/logout', 'User::logout');
$routes->resource('post');
$routes->get('ajax/form', 'Ajax::form');
$routes->get('ajax/form', 'AjaxController::formTambah');
$routes->get('ajax/form/(:num)', 'AjaxController::formEdit/$1');
=======
>>>>>>> 915420f3e91ca833bfbfddb78a67ac72e9dade4d
