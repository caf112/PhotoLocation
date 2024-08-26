<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('articles/index');
});

Route::resource('articles', PostArticlesController::class);
