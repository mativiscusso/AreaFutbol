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
Route::post('/posteos/agregar', 'PostController@agregar')->name('posteos.agregar')->middleware('admin');
//modificar posteos
Route::get('/posteos/modificar/{id}', 'PostController@edicion');
Route::post('/posteos/modificar', 'PostController@modificar')->name('posteos.modificar')->middleware('admin');
//eliminar posteos
Route::get('/posteos/eliminar/{id}', 'PostController@eliminar')->name('posteos.eliminar')->middleware('admin');

Route::get('/posteos/{id}', 'PostController@detalle' );

//listar comentarios
Route::get('/comentarios/listar', 'ComentarioController@listar' )->name('posteos.listar');
//agregar comentarios
Route::post('/posteos/comentar', 'ComentarioController@agregar')->name('comentarios.agregar');
//modificar comentarios
Route::get('/comentario/modificar/{id}', 'ComentarioController@edicion');
Route::post('/comentario/modificar', 'ComentarioController@modificar')->name('comentario.modificar')->middleware('admin');
//eliminar comentarios
Route::get('/comentario/eliminar/{id}', 'ComentarioController@eliminar')->name('comentario.eliminar')->middleware('admin');

Route::get('/admin', function () {
    return view('blog.admin');
})->middleware('admin');
Route::get('/admin/posteos', 'PostController@listarAdmin')->middleware('admin');

Route::get('/admin/comentarios', 'ComentarioController@listar')->middleware('admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
