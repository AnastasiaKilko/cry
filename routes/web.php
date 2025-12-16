<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FavController;
use App\Http\Controllers\ShoppingBagController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/profile/{id}', 'profile')->name('profile');
        Route::put('/change-profile', 'update')->name('update');

    });

    Route::get('/change-profile', function () {
        return view('changeProfile');
    })->name('changeProfile');


    Route::controller(ReviewController::class)->group(function () {
        Route::get('/write-review/{id}', 'index')->name('review');
        Route::post('/write-review/{id}', 'create')->name('review');
    });

    Route::controller(FavController::class)->group(function () {
        Route::post('/favorites/{id}', 'addToFavs')->name('fav');
        Route::get('/favorites', 'fav')->name('favourites');
    });

    Route::controller(ShoppingBagController::class)->group(function () {
        Route::post('/shopping-bag/{id}', 'addToCart')->name('addToShoppingBag');
        Route::get('/shopping-bag', 'cart')->name('shoppingBag');
        Route::post('/plus/{id}', 'plus')->name('plus');
        Route::post('/minus/{id}', 'minus')->name('minus');
    });
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', function () {
        return view('adminPanel');
    })->name('adminPanel');

    Route::controller(BookController::class)->group(function () {
        Route::get('/create-book', 'index')->name('createBook');
        Route::post('/create-book', 'create')->name('createBook');
        Route::get('/catalogue', 'catalog')->name('catalogue');
        Route::get('/e-catalogue', 'eCatalog')->name('eCatalogue');
        Route::get('/book-page/{id}', 'bookPage')->name('bookPage');
    });
});

Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login')->name('login');
    Route::post('/logout', 'logout')->name('logout')->middleware('auth');
    Route::post('/register', 'register')->name('register');
});

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');


Route::controller(MainController::class)->group(function () {
    Route::get('/', 'dayBook')->name('welcome');
    Route::get('/search', 'searchBooks')->name('search');
});

Route::get('/about-us', function () {
    return view('aboutUs');
})->name('aboutUs');

Route::get('/e-book-reader', function () {
    return view('eBookReader');
})->name('eBookReader');

Route::get('/special-offers', function () {
    return view('specialOffers');
})->name('specialOffers');



