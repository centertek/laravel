<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth', function () {
    return view('auth.login');
});


Route::get('/usuarios', 'UserController@index');

Route::get('/usuarios/{id}', 'UserController@show')
    ->where('id', '[0-9]+');

Route::get('/usuarios/nuevo', 'UserController@create');

Route::get('usuarios/{nickname}', function ($nickname) {
    return "Hola: {$nickname}";
});

Route::get('saludo/{name}/{nickname?}', 'WelcomeUserController');

//Route::post('login', 'Auth\LoginController_1@login')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
