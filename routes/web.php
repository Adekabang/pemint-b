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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/biodata', function (){
    return 'Nama: Mohammad Raska, NIM: 175150700111019';
});

$router->get('hello/{name}', function($name){
    return 'Hello, '. $name;
});

$router->get('/products', 'ProductController@index');
$router->get('/products/{id}', 'ProductController@show');
