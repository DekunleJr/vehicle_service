<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EngineController;
use App\Http\Controllers\MoveController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/engine/start', [EngineController::class, 'startEngine']);
Route::get('/engine/stop', [EngineController::class, 'stopEngine']);
Route::get('/move/forward', [MoveController::class, 'forward']);
Route::get('/move/reverse', [MoveController::class, 'reverse']);
Route::get('/move/accelerate', [MoveController::class, 'accelerate']);
Route::get('/move/decelerate', [MoveController::class, 'decelerate']);
Route::get('/move/brake', [MoveController::class, 'brake']);
Route::get('/move/stair-left', [MoveController::class, 'stairLeft']);
Route::post('/move/stair-right', [MoveController::class, 'stairRight']);

Route::post('/posts/create', [PostController::class, 'createPost']);
Route::get('/posts', [PostController::class, 'getPosts']);
Route::get('/posts/{id}', [PostController::class, 'getPost']);
Route::put('/posts/update/{id}', [PostController::class, 'updatePost']);
Route::delete('/posts/delete/{id}', [PostController::class, 'deletePost']);


Route::post('/comments/create', [CommentController::class, 'createComment']);
Route::get('/comments', [CommentController::class, 'getComments']);
Route::get('/comments/{id}', [CommentController::class, 'getComment']);
Route::put('/comments/update/{id}', [CommentController::class, 'updateComment']);
Route::delete('/comments/delete/{id}', [CommentController::class, 'deleteComment']);

Route::post('/like/{id}', [LikeController::class, 'like']);
Route::delete('/unlike/{id}', [LikeController::class, 'unlike']);