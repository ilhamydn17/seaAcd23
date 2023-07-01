<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FilmController::class, 'index'])->name('films.index');

Route::resource('films', FilmController::class);

Route::get('/tes', function(){
    return view('app.booking.seat-booking');
});

Route::middleware('auth')->group(function () {
    Route::get('films/{film}/book', [BookingController::class, 'bookSeat'])->name('films.book');
    Route::post('films/{film}/book/checkout', [BookingController::class, 'bookCheckout'])->name('films.book.checkout');
    Route::post('films/{film}/book/confirm', [BookingController::class, 'confirmCheckout'])->name('films.book.confirm');

    Route::get('user/profile', [UserController::class, 'index'])->name('user.profile');
    Route::post('user/top-up', [UserController::class, 'topupBalance'])->name('user.topup');
});
