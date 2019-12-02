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
    return view('blog.index');
});

//listar
Route::get('/posteos', 'PostController@listar' )->name('posteos.listar');

//agregar
Route::get('/posteos/agregar', 'PostController@mostrar');
Route::post('/posteos/agregar', 'PostController@agregar')->name('posteos.agregar');
//modificar
Route::post('/posteos/modificar', 'PostController@modificar');
//eliminar
Route::get('/posteos/eliminar/{id}', 'PostController@eliminar');

Route::get('/posteos/{id}', 'PostController@detalle' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
