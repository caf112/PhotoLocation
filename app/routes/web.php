<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('articles/index');
// });

Route::get('/', [ArticlesController::class, 'index'])->name('index');

Route::resource('articles', ArticlesController::class);