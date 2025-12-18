<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SessionController;
use App\Models\Person;

// AuthorController関連
Route::get('/', [AuthorController::class, 'index']);
Route::get('/add', [AuthorController::class, 'add']);
Route::post('/add', [AuthorController::class, 'create']);
Route::get('/edit', [AuthorController::class, 'edit']);
Route::post('/edit', [AuthorController::class, 'update']);
Route::get('/delete', [AuthorController::class, 'delete']);
Route::post('/delete', [AuthorController::class, 'remove']);

Route::get('/find', [AuthorController::class, 'find']);
Route::post('/find', [AuthorController::class, 'search']);

Route::get('/author/{author}', [AuthorController::class, 'bind']);

Route::get('/verror', [AuthorController::class, 'verror']);

Route::get('/relation', [AuthorController::class, 'relate']);

// BookController関連
Route::prefix('book')->group(function () {
    Route::get('/', [BookController::class, 'index']);
    Route::get('/add', [BookController::class, 'add']);
    Route::post('/add', [BookController::class, 'create']);
});

// SessionController関連
Route::get('/session', [SessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);

// 指定したレコードの論理削除
Route::get('/softdelete', function () {
    Person::find(1)->delete();
});
// 論理削除されたレコードの確認
Route::get('/softdelete/get', function () {
    $person = Person::onlyTrashed()->get();
    dd($person);
});
// 論理削除されたレコードの復元
Route::get('/softdelete/store', function () {
    $result = Person::onlyTrashed()->restore();
    echo $result;
});
// 論理削除されたレコードの完全削除
Route::get('/softdelete/absolute', function () {
    $result = Person::onlyTrashed()->forceDelete();
    echo $result;
});
