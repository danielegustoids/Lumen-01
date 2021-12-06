<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// https://lumen.laravel.com/docs/8.x/routing#basic-routing
//https://auth0.com/blog/developing-restful-apis-with-lumen/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('user/{id}', function ($id) {
    return 'User '.$id;
});

$router->get('rand[/{min}/{max}]', 'RandController');

$router->get('randimg[/{min}/{max}]', 'Images\RandController');

$router->get('general', 'GeneralController');
$router->get('general/method','GeneralController@method');