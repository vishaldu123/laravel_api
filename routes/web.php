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

$router->group(['prefix' => 'api'], function () use ($router) {
  $router->get('employee',  ['uses' => 'EmployeeController@showAllEmployee']);

  $router->get('employee/{emp_id}', ['uses' => 'EmployeeController@showEmployee']);

  $router->post('employee', ['uses' => 'EmployeeController@create']);

  $router->delete('employee/{emp_id}', ['uses' => 'EmployeeController@delete']);

  $router->put('employee/{emp_id}', ['uses' => 'EmployeeController@update']);



  $router->get('picture',  ['uses' => 'PictureController@showAllPicture']);

  $router->get('picture/{id}', ['uses' => 'PictureController@showPicture']);

  $router->post('picture', ['uses' => 'PictureController@create']);

  $router->delete('picture/{id}', ['uses' => 'PictureController@delete']);

  $router->put('picture/{id}', ['uses' => 'PictureController@update']);
  
  
});