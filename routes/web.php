<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EqQueryBuilder;
use App\Http\Controllers\UserController;

use  App\Http\Middleware\AgeCheck;
use  App\Http\Middleware\countryCheck;

Route::get('/', function () {
    return view('welcome');
});



// Middleware check in web = http://127.0.0.1:8000/about?age=18&country=palestine
// Route::view('/about', 'about')->middleware("check1");
// Route::view('/home', 'home');

// group middleware check 
// Route::middleware("check1")->group(function () {
// Route::view('/about', 'about');
// Route::view('/home', 'home');
// });

// directly implement middleware in route

// Route::view('/about', 'about')->middleware(AgeCheck::class);
// Route::view('/home', 'home')->middleware(AgeCheck::class,countryCheck::class); // also you write it in form of array

 
// Connecting Db

Route::get('adduser', [UserController::class,'addUser']);


// Equilent and Query builder 

Route::get('users' , [EqQueryBuilder::class , 'Queries']);
Route::get('add' , [EqQueryBuilder::class , 'AddnewUser']);
Route::get('upd' , [EqQueryBuilder::class , 'updateandDelete']);

