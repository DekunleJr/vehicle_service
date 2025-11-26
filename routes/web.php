<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EngineController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/engine/start', [EngineController::class, 'startEngine']);
Route::get('/engine/stop', [EngineController::class, 'stopEngine']);