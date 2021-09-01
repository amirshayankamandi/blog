<?php

namespace App;

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


//post -> index
Route::get('/', [PostController::class, 'index'])->name('home');

//show post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
