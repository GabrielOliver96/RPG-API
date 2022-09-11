<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//////

Route::post('/register', [App\Http\Controllers\ControllersAPI\UserController::class, 'register']);
Route::post('/login', [App\Http\Controllers\ControllersAPI\UserController::class, 'login']);

Route::group(['middleware' => ['AuthJwt']], function(){

    Route::get('/find-all-characters', [App\Http\Controllers\ControllersAPI\CharacterController::class, 'findAllCharacters']);
    Route::post('/create-character', [App\Http\Controllers\ControllersAPI\CharacterController::class, 'createCharacter']);

});
