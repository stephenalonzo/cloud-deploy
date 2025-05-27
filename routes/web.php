<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);
Route::get('/avatars/{avatar}', [UserController::class, 'avatar']);
Route::post('/users/{user}', [UserController::class, 'update']);
