<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->options('(:any)', '', ['filter' => 'cors']);
$routes->group('api', function ($routes) {

    // Auth
    $routes->post('login', 'Api\AuthController::login');

    // Protected routes
    $routes->group('', ['filter' => 'jwt'], function ($routes) {
        $routes->resource('employees', [
            'controller' => 'Api\EmployeeController'
        ]);
    });

});
