<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/new', 'Home::index');
$routes->get('/user/(:num)', 'Home::show/$1');
$routes->get('/', 'Home::new');
$routes->post('/', 'Home::store');

//$routes->get('/wallet/(:num)', 'Home::show/$1');
$routes->get('/wallet', 'Wallet::index');
$routes->post('/wallet', 'Wallet::store');
$routes->post('/wallet/delete(:num)', 'Wallet::delete/$1');
//$routes->get('/wallet/delete', 'Wallet::delete');
//$routes->get('/wallet/delete', 'Wallet::index');


//$routes->get('/chart', 'charts::show');
//$routes->get('/chart', 'charts::index');
//$routes->post('/chart', 'Expense::store');
$routes->get('chart', 'Expense::index');


$routes->get('/category', 'Category::new');
$routes->get('/category/index(:num)', 'Category::show/$1');
$routes->post('/category', 'Category::store');

$routes->post('/expense', 'Expense::store');
//$routes->post('/expense', 'Expense::store');


