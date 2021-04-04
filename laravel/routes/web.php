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

Route::get('/', 'MainController@index')->name('home');
Route::get('product/{id}', 'MainController@productShow')->name('product.show');
Route::get('info/{id}', 'MainController@infoShow')->name('info.show');
Route::get('search', 'MainController@search')->name('main.search');
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::post('/admin', 'AdminController@store')->name('admin.store');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
