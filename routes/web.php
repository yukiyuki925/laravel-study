<?php

use App\Http\Controllers\TagController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// todo
Route::middleware('auth')->group(function () {
    Route::resource('todos', TodoController::class);
    Route::PUT('todos/{todo}/toggle', [TodoController::class, 'toggle'])->name('todos.toggle');
});

// ユーザー
Route::get('/', [UserController::class, 'showRegister']);
Route::get('/register', [UserController::class, 'showRegister']);
Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::middleware('auth')->group(function () {
    Route::get('/welcome', [UserController::class, 'welcome'])->name('welcome');
    Route::post('logout', [UserController::class, 'logout'])->name('logout');
});

// タグ
Route::get('/tag', [TagController::class, 'tagIndex'])->name('tagIndex');
