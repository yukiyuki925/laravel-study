<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;


// todo
Route::resource('todos', TodoController::class);

// ユーザー
Route::get('/register', [\App\Http\Controllers\UserController::class, 'showRegister']);
Route::post('/register', [\App\Http\Controllers\UserController::class, 'register']);
Route::middleware('auth')->group(function () {
    Route::get('/welcome', [\App\Http\Controllers\UserController::class, 'welcome'])->name('welcome');
});
