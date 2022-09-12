<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Cadastro e login.
Route::post('/register', [App\Http\Controllers\UserController::class, 'register'])->name('register');
