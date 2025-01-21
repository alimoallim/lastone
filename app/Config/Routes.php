<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\ProjectController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ProjectController::index');
$routes->get('/addrecord', 'ProjectController::AddRecord');
$routes->post('/create', 'ProjectController::CreateRecord');
$routes->post('/updateprocess', 'ProjectController::UpdateRecord');
$routes->get('update/(:num)', 'ProjectController::EditShow/$1');
$routes->get('delete/(:num)', 'ProjectController::DeleteRecord/$1');
$routes->get('/delete', 'ProjectController::AddRecord');
