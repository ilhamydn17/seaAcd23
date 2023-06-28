<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;

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
});
Route::get('films/{film}/book/seats', [FilmController::class, 'bookSeat'])->name('films.book.seats');
