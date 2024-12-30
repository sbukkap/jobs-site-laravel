<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\RegisteredUserController;
use \App\Http\Controllers\SessionController;
use \App\Http\Controllers\SearchController;

Route::get('/', [\App\Http\Controllers\JobController::class, 'index']);
Route::get('/search', SearchController::class);

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
}); 

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');
