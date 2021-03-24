<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts/store', [PostController::class, 'store']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('login', 'login');