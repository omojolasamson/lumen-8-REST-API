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

$router->group(['prefix' => 'api/v1'], function () use ($router) {


/*$app->group(['prefix' => 'api/v1', 'namespace' => 'App\Http\Controllers'], function($app)
{*/

//the route below is for creating a new user
$router->post('users/add', 'UserController@createUser');


//the route below is for viewing one user
$router->get('users/view/{id}', 'UserController@viewUser');


//the route below is for updating the information of a user
$router->put('users/edit/{id}', 'UserController@updateUser');


//the route below is for deleting a user from the database
$router->delete('users/delete/{id}', 'UserController@deleteUser');


//the route below is for viewing all users
$router->get('users/index', 'UserController@index');


});
