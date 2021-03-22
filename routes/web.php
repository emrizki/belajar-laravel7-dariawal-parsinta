<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
Route::get('/posts/{slug}', [PostController::class, 'show']);
Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('login', 'login');