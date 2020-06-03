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

/** @var \Laravel\Lumen\Routing\Router $router */
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'temperatura'], function () use ($router) {
        $router->get('', 'TemperaturaController@listJon');
        $router->post('', 'TemperaturaController@store');
    });
});


$router->group(['prefix' => 'api'], function () use ($router) {
    $router->post('login', 'TokenController@gerarToken');
    $router->post('user', 'UsersController@newUser');
    $router->get('user/{id}', 'UsersController@show');
    $router->post('check_email_exist', 'UsersController@checkEmailExist');
    $router->post('check_username_exist', 'UsersController@checkUsernameExist');
});

