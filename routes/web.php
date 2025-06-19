<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// Middleware check in web = http://127.0.0.1:8000/about?age=18&country=palestine
Route::view('/about', 'about')->middleware("check1");
Route::view('/home', 'home');