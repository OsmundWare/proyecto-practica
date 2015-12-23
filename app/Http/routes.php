<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', 'WelcomeController@index');



Route::get('home', 'HomeController@index');

Route::get('test','WelcomeController@test');

Route::get('acerca','PaginasController@acerca');

Route::get('contacto','PaginasController@contacto');

Route::resource('articulos','ArticulosController');

Route::resource('log','LogController');

Route::resource('usuario','UsuarioController');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
