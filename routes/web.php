<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\JobController::class, 'index']);
Route::get('/register', [\App\Http\Controllers\RegisteredUserController::class, 'create']);
Route::post('/register', [\App\Http\Controllers\RegisteredUserController::class, 'store']);

Route::get('/login', [\App\Http\Controllers\SessionController::class, 'create']);
Route::post('/login', [\App\Http\Controllers\SessionController::class, 'store']);

Route::delete('/logout', [\App\Http\Controllers\SessionController::class, 'destroy']);
