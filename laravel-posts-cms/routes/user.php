<?php

use App\Http\Controllers\User\PostController;

Route::controller(PostController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('posts/tag/{tagSlug}', [PostController::class, 'index'])->where('tagSlug', '[a-z]+')->name('posts.index.tag');
    Route::resource('posts', PostController::class)->only(['index', 'show']);
});
