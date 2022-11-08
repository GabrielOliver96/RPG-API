<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/register', [App\Http\Controllers\ControllersAPI\UserController::class, 'register']);
Route::post('/login', [App\Http\Controllers\ControllersAPI\UserController::class, 'login']);

Route::group(['middleware' => ['AuthJwt']], function(){

    Route::get('/find-all-characters', [App\Http\Controllers\ControllersAPI\CharacterController::class, 'findAllCharacters']);
    Route::post('/create-character', [App\Http\Controllers\ControllersAPI\CharacterController::class, 'createCharacter']);
    Route::delete('/delete/{id}', [App\Http\Controllers\ControllersAPI\CharacterController::class, 'deleteCharacter']);

});
