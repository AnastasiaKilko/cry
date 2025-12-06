<?php

//<!--НАДО БУДЕТ ПОТОМ УДАЛИТЬ-->

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::controller(\App\Http\Controllers\FavController::class)->group(function () {
    Route::get('/fav', 'fav');
});