<?php



Route::get('/','IndexController@index')->name('index');

Route::get('/url/{id}','UrlController@show')->name('show_url');

Route::post('/url/','UrlController@store')->name('store_url');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
