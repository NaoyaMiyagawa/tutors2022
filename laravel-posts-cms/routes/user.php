<?php

Route::controller(PostController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::resource('posts', PostController::class)->only(['index', 'show']);
});
