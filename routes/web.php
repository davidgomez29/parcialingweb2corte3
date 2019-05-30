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

Route::get('/administrador/index','AdminController@index');
Route::get('/administrador/create', 'AdminController@crearestudiante');
Route::post('/administrador/show', 'AdminController@verestudiante');
Route::get('/administrador/{User}','AdminController@index');
Route::get('/tables', 'HomeController@tables');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
