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

Route::get('/', 'PostController@listar' );

//listar posteos
Route::get('/posteos', 'PostController@listar' )->name('posteos.listar');
//agregar posteos
Route::get('/posteos/agregar', 'PostController@mostrar');
Route::post('/posteos/agregar', 'PostController@agregar')->name('posteos.agregar');
//modificar posteos
Route::post('/posteos/modificar', 'PostController@modificar');
//eliminar posteos
Route::get('/posteos/eliminar/{id}', 'PostController@eliminar');

Route::get('/posteos/{id}', 'PostController@detalle' );

//listar comentarios
Route::get('/comentarios/listar', 'ComentarioController@listar' )->name('posteos.listar');
//agregar comentarios
Route::post('/posteos/comentar', 'ComentarioController@agregar')->name('comentarios.agregar');
//modificar comentarios
Route::post('/comentario/modificar', 'ComentarioController@modificar');
//eliminar comentarios
Route::get('/comentario/eliminar/{id}', 'ComentarioController@eliminar');

Route::get('/admin', function () {
    return view('blog.admin');
});
Route::get('/admin/posteos', 'PostController@listarAdmin');

Route::get('/admin/comentarios', 'ComentarioController@listar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
