<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('/login', function () {
    return view('layouts/login');
});
Route::get('/master', function () {
    return view('layouts/master');
});
Route::get('/', function () {
    return view('layouts/register');
});

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
