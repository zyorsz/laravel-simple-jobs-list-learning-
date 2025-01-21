<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\job;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;



// Home page
Route::view('/', 'home');

// Contact page
Route::view('/contact', 'contact');

// Job Page & functions
Route::resource('jobs', JobController::class);

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destory']);