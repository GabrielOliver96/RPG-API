<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->prefix('/character')->group(function(){

    Route::get('/all-characters', [App\Http\Controllers\CharacterController::class, 'findAllCharacters'])->name('allCharacters');

    Route::get('/create', function(){ return view('character.create'); });
    Route::post('/create', [App\Http\Controllers\CharacterController::class, 'createCharacter'])->name('createCharacter');

});

