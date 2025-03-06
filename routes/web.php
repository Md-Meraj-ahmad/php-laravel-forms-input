<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return view('welcome');
});


// Route::get('/home', function (){
//     return view('index');
// });



Route::get('/demo', [DemoController::class, 'demo']);


Route::get('/home', [HomeController::class, 'index']);

Route::resource('/blogs', BlogController::class);
Route::get('/blogs/{id}', [BlogController::class, 'show']);
Route::get('/blogs/{id}/edit', [BlogController::class, 'edit']);
Route::post('/blogs/{id}/update', [BlogController::class, 'update']);
Route::post('/blogs/{id}/delete', [BlogController::class, 'destroy']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register'); 
Route::post('/register', [RegisterController::class, 'register']); 

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); 
Route::post('/login', [LoginController::class, 'login']); 
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); 

