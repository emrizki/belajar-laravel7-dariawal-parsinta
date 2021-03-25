<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
// Read
Route::get('/posts', [PostController::class, 'index']);

// Create
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts/store', [PostController::class, 'store']);

// Update
Route::get('/posts/{post:slug}/edit', [PostController::class, 'edit']);
Route::patch('/posts/{post:slug}/edit', [PostController::class, 'update']);

// Detail
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('login', 'login');