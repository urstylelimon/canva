<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::post('login', [LoginController::class, 'login']);
Route::post('register', [RegisterController::class, 'register']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});