<?php

use Illuminate\Support\Facades\Route;
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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->post('login', 'AuthController@login');
    $router->post('logout', 'AuthController@logout');
    $router->post('refresh', 'AuthController@refresh');
});

$router->group(['prefix' => 'api', 'middleware' => ['auth','admin']], function () use ($router) {
    $router->get('users', 'UserController@showAllUsers');
    $router->get('users/{id}', 'UserController@showUser');
    $router->post('users', 'UserController@create');
    $router->put('users', 'UserController@update');
    $router->delete('users/{id}', 'UserController@delete');
    $router->get('tags', 'TagsController@showAllTags');
});
