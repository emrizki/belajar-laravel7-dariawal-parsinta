<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    $postBody = 'lorem ipsum dolor sit amet.
    lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.
    lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.
    lorem ipsum dolor sit amet.lorem ipsum dolor sit amet.';
    return view('welcome', ["postBody" => $postBody]);
});


Route::view('contact', 'contact');
Route::view('/series/create', 'series.create');