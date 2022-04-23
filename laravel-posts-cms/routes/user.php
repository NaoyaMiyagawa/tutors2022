<?php

Route::get('/', 'PostController@index')->name('home');
Route::resource('posts', 'PostController')->only(['index', 'show']);
