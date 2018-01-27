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
Route::get('/contato', function () {
    return view('contato');
});
Route::get('/art', function () {
    return view('/art');
});
Route::get('/contato','UsuarioController@goContato')->name('rotaContato');

Route::get('/art','UsuarioController@goArt')->name('rotaArt');

Route::post('/contato','UsuarioController@mail')->name('rotaMail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
