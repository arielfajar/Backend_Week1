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

$routes->group('api', function ($routes) {
    $routes->get('products', 'ProductController::readproductApi');
    $routes->get('product/(:any)', 'ProductController::getProductApi/$1');
    $routes->POST('insert-products', 'ProductController::insertProductApi');
});