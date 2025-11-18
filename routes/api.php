<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hehe', [App\Http\Controllers\TestController::class, 'index']);
Route::get('/list-post', [App\Http\Controllers\PostController::class, 'listPost']);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
