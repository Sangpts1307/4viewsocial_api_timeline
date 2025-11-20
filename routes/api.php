<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hehe', [App\Http\Controllers\TestController::class, 'index']);
Route::get('/list-post', [App\Http\Controllers\PostController::class, 'listPost']);
Route::post('/add-post', [App\Http\Controllers\PostController::class, 'addPost']);
Route::post('/delete-post', [App\Http\Controllers\PostController::class, 'deletePost']);
Route::post('/like-post', [App\Http\Controllers\PostController::class, 'likePost']);
Route::post('/save-post', [App\Http\Controllers\PostController::class, 'savePost']);
Route::get('/my-post', [App\Http\Controllers\PostController::class, 'myPost']);
Route::get('/my-saved', [App\Http\Controllers\PostController::class, 'mySaved']);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
