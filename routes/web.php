<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/403', function () {
    return view('error403');
})->name('error403');

Route::get('/404', function () {
    return view('error404');
})->name('error404');

Route::get('/about-us', function () {
    return view('aboutUs');
})->name('aboutUs');

Route::get('/book-page', function () {
    return view('bookPage');
})->name('bookPage');

Route::get('/catalogue', function () {
    return view('catalogue');
})->name('catalogue');

Route::get('/change-personal-data', function () {
    return view('changePersonalDataModel');
})->name('changePersonalDataModel');

Route::get('/e-book-reader', function () {
    return view('eBookReader');
})->name('eBookReader');

Route::get('/e-catalogue', function () {
    return view('eCatalogue');
})->name('eCatalogue');

Route::get('/favourites', function () {
    return view('favourites');
})->name('favourites');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [\App\Http\Controllers\UserController::class, 'register'])->name('register');

Route::get('/review-modal-page', function () {
    return view('reviewModalPage');
})->name('reviewModalPage');

Route::post('/review-modal-page', [\App\Http\Controllers\UserController::class, 'reviewModalPage'])->name('reviewModalPage');

Route::get('/shopping-bag', function () {
    return view('shoppingBag');
})->name('shoppingBag');

Route::get('/special-offers', function () {
    return view('specialOffers');
})->name('specialOffers');

Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');

Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout1'])->name('logout');