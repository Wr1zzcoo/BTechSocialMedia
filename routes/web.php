<?php

use App\Http\Controllers\UserController;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/register', [UserController::class, 'showRegistrationForm']);
Route::get('/auth/login', [UserController::class, 'showLoginForm']);
