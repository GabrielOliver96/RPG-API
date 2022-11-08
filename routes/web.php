<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->prefix('/character')->group(function(){

    Route::get('/add-image', function(){ return view('character.addImage'); });
    Route::post('/add-image', [App\Http\Controllers\CharacterController::class, 'addImg']);

    Route::get('/all-characters', [App\Http\Controllers\CharacterController::class, 'findAllCharacters'])
        ->name('allCharacters');

    Route::get('/create', [App\Http\Controllers\CharacterController::class, 'createCharacterView']);
    Route::post('/create', [App\Http\Controllers\CharacterController::class, 'createCharacter'])
        ->name('createCharacter');

    Route::get('/create/vampire-the-mascared-3ed', [App\Http\Controllers\CharacterController::class, 'createCharacter']);

    Route::get('/delete/{id}', [App\Http\Controllers\CharacterController::class, 'deleteCharacter'])
        ->name('deleteCharacter');

    Route::get('/edit/{id}', [App\Http\Controllers\CharacterController::class, 'editCharacterView'])
        ->name('editCharacterView');
    Route::post('/edit/{id}', [App\Http\Controllers\CharacterController::class, 'editCharacter'])
        ->name('editCharacter');
});

