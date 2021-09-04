<?php

namespace App;

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


//main page
Route::get('/', [PostController::class, 'index'])->name('home');

//show post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// Register, storeUser
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
//Login and store
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
//lougout
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');