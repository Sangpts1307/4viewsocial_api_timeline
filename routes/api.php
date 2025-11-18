<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hehe', [App\Http\Controllers\TestController::class, 'index']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
