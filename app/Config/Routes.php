<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('insertproduct', 'ProductController::insertPage');
$routes->get('products', 'ProductController::readProduct');
$routes->POST('insertproduct', 'ProductController::insertProductORM');
$routes->get('edit-products/(:any)', 'ProductController::getProduct/$1');
$routes->post('update-products/(:any)', 'ProductController::updateProduct/$1');
$routes->get('delete-products/(:any)', 'ProductController::deleteProduct/$1');