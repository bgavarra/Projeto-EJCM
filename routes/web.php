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
Route::get('/home', function () {
    return view('/home');
});
Route::get('/changeAbout', 'UsuarioControler@changeAbout')->name('RotaChangeAbout');

Route::post('/contato', 'UsuarioController@store')->name('RotaMailContato');

Route::get('/contato','UsuarioController@goContato')->name('rotaContato');

Route::get('/art','UsuarioController@goArt')->name('rotaArt');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
