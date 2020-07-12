<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/registroc', 'HomeController@getregistro_cliente');
Route::post('/registroc', 'HomeController@postregistro_cliente');

Route::get('/registros', 'SolicitudController@index');
Route::post('/registros', 'SolicitudController@store');
Route::get('/modelos', 'SolicitudController@getmodelos');
Route::get('/clientes', 'SolicitudController@getclientes');





Route::middleware(['admin'])->group(function () {
       Route::get('/usuarios', 'Admin\UserController@index');
       Route::post('/usuarios', 'Admin\UserController@store');
       Route::get('/usuarios/{id}', 'Admin\UserController@edit');
       Route::post('/usuarios/{id}', 'Admin\UserController@update');
       Route::delete('/usuarios/{id}', 'Admin\UserController@destroy')->name('usuarios.destroy');

       Route::get('/entradas', 'Admin\UserController@index');
       Route::get('/servicio', 'Admin\UserController@index');
});
