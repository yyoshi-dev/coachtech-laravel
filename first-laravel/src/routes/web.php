<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HelloController;

// Route::get('/test', [TestController::class, 'index']);
// Route::get('/test/{text}', [TestController::class, 'index']);
// Route::get('/test/{text?}', [TestController::class, 'index']);
Route::get('/test', [TestController::class, 'index']);
Route::get('/hello', [HelloController::class, 'index']);

// 問1
// Route::get('/test/{room}/{id}', function ($room, $id) {
//     return 'roomが' . $room . 'でidは' . $id . 'です';
// });

// 問2
// Route::get('/test/{greeting?}', function ($greeting = 'Goodmorning') {
//     return $greeting . '=おはようございます';
// });
