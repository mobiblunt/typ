<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;

Route::post('/logs', [LogController::class, 'store']);
Route::get('/users/logs/{username}', [LogController::class, 'index']);
