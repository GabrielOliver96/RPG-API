<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/character')->group(function(){

    Route::get('/create-character', function(){ return view('character.create'); });
    Route::post('/create-character', [App\Http\Controllers\CharacterController::class, 'createCharacter'])->name('createCharacter');

});

