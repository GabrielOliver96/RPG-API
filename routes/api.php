<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [App\Http\Controllers\UserController::class, 'register']);
Route::post('/login', [App\Http\Controllers\UserController::class, 'login']);

Route::post('/create-character', [App\Http\Controllers\CharacterController::class, 'createCharacter']);

Route::group(['middleware' => ['AuthJwt']], function(){
        
});
