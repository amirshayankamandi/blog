<?php

namespace App;

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\NewslatterController;
use Illuminate\Support\Facades\Route;


//main page
Route::get('/', [PostController::class, 'index'])->name('home');

//show post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

//Comment
Route::post('posts/{post:slug}/comments', [PostCommentController::class, 'store']);

//Subscribe and MailChimp Services 
Route::post('newslatter', NewslatterController::class);

// Register, storeUser
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

//Login and store
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

//lougout
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

// Admin
Route::middleware('can:admin')->group(function () {
Route::resource('admin/posts', AdminPostController::class)->except('show');
});
