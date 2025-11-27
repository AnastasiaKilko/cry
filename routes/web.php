<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login')->name('login');
    Route::post('/register', 'register')->name('register');
    Route::post('/logout', 'logout')->name('logout')->middleware('auth');
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/403', function () {
    return view('error403');
})->name('error403');

Route::get('/404', function () {
    return view('error404');
})->name('error404');

Route::get('/admin', function () {
    return view('adminPanel');
})->name('adminPanel');

Route::get('/about-us', function () {
    return view('aboutUs');
})->name('aboutUs');

Route::get('/book-page', function () {
    return view('bookPage');
})->name('bookPage');

Route::get('/catalogue', function () {
    return view('catalogue');
})->name('catalogue');

Route::get('/change-profile', function () {
    return view('changePersonalDataModal');
})->name('changePersonalDataModal');

Route::post('/change-profile', [UserController::class, 'register'])->name('register');

Route::get('/create-book', [BookController::class, 'index'])->name('createBook');
Route::post('/create-book', [BookController::class, 'create'])->name('createBook');

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



Route::get('/profile/{id}', [UserController::class, 'profile'])->name('profile');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/write-review', function () {
    return view('reviewModalPage');
})->name('reviewModalPage');

Route::get('/write-review', [ReviewController::class, 'index'])->name('reviewModalPage');
Route::post('/write-review', [ReviewController::class, 'create'])->name('reviewModalPage');

Route::get('/shopping-bag', function () {
    return view('shoppingBag');
})->name('shoppingBag');

Route::get('/special-offers', function () {
    return view('specialOffers');
})->name('specialOffers');
