<!--НАДО БУДЕТ ПОТОМ УДАЛИТЬ-->

<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::controller(BookController::class)->group(function () {
    Route::post('/create/bookType', 'bookType');
});