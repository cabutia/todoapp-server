<?php

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

$router->get('/categories/all', 'CategoryController@all');
$router->get('/categories/show/{id}', 'CategoryController@show');
$router->post('/categories/update', 'CategoryController@update');
$router->post('/categories/create', 'CategoryController@store');
$router->post('/categories/delete/{id}', 'CategoryController@delete');

$router->get('/todos/all', 'TodoController@all');
$router->get('/todos/show/{id}', 'TodoController@show');
$router->post('/todos/update', 'TodoController@update');
$router->post('/todos/create', 'TodoController@store');
$router->post('/todos/delete/{id}', 'TodoController@delete');
