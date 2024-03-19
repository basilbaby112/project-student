<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('marks', 'Marks::index');
$routes->post('marks/submit', 'Marks::submit');
$routes->get('marks/data-visual/(:num)', 'Marks::dataVisual/$1');
$routes->get('students', 'Marks::showStudents');
