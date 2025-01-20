<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;


// todo
Route::resource('todos', TodoController::class);

// ユーザー
Route::get('/register', [UserController::class, 'showRegister']);
Route::post('/register', [UserController::class, 'register']);
Route::middleware('auth')->group(function () {
    Route::get('/welcome', [UserController::class, 'welcome'])->name('welcome');
    Route::post('logout', [UserController::class, 'logout'])->name('logout');
});