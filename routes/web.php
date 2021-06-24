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

Route::get('/', function(){
    return view('auth.login');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/contactanos','ContactanosController@index')->name('contactanos');
Route::get('/productos','ProductoController@index')->name('productos');
Route::post('/contactanos','ContactanosController@contactanos')->name('contactanos');