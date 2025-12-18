<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get("/", [AuthController::class, 'index']);
Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
});
