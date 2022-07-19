<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(UserController::class)->group(function(){
    Route::get('/users', 'index');
    Route::post('/user', 'store');
    Route::get('/user/{id}', 'show');
    Route::put('/user/{id}', 'update');
    Route::delete('/user/{id}', 'destroy');
});
