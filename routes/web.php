<?php
Route::get('/', 'PageController@index')->name('home');
Route::get('/home', 'PageController@index')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::resource('contact', 'MessageController');
Route::get('/messages', 'MessageController@messages')->name('messages');
Auth::routes();