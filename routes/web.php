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



Route::get('/','IndexController@index')->name('index');
Route::get('/{url}','IndexController@show')->name('show_url');
Route::post('/','IndexController@store')->name('store_url');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
