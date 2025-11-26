<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EngineController;
use App\Http\Controllers\MoveController;


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
