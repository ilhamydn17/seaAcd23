<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaction;
use App\Models\Film;
use App\Models\Seat;
use App\Models\User;
use App\Models\FilmSeat;
use App\Models\Transaction;
use RealRashid\SweetAlert\Facades\Alert;

class BookingController extends Controller
{
    public $seats = [];

    public function bookSeat(Film $film){
        return view('app.booking.seat-booking', compact('film'));
    }

    public function bookCheckout(Film $film){

        $age_form = request()->input('age_form');

        // Kembalikan jika user belum memilih kursi
        if(request()->input('seats') == null){
            Alert::toast('Maaf, anda belum memilih kursi', 'warning');
            return redirect()->back();
        }

        // Kembalikan jika usia user di bawah age rating
        if(auth()->user()->age < $film->age_rating ){
            Alert::toast('Maaf, usia anda dibawah age rating', 'warning');
            return redirect()->route('films.index');
        }

        // Kembalikan jika user memilih kursi lebih dari 6
        if(count(request()->input('seats')) > 6){
            Alert::toast('Maaf, maksimal 6 kursi yang dapat dipesan', 'warning');
            return redirect()->back();
        }

        // Get booked seat data
        $seats_booked = [];
        $confirm_data_seat = [];
        foreach (request()->input('seats') as $item) {
            $confirm_data_seat[] = $item;
            $seats_booked[] = Seat::find($item)->seat_number;
        }

        // Count total cost based on seats ordered qty
        $total_cost = count($seats_booked) * $film->ticket_price;

    return view('app.booking.checkout-booking', compact(['film','age_form','total_cost', 'seats_booked', 'confirm_data_seat']));
    }

    public function confirmCheckout(Film $film){
        $total_cost = request()->input('total_cost');
        $seats_booked = request()->input('confirm_data_seat'); // array

        if(auth()->user()->balance < $total_cost){
            Alert::error('Pemesanan Gagal','saldo anda tidak mencukupi');
            return redirect()->route('films.book', $film);
        }

        // Menyimpan data pesanan ke tabel transaction
        Transaction::create([
            'user_id' => auth()->user()->id,
            'total_cost'=> $total_cost,
        ]);

        // Update ordered seat
        foreach ($seats_booked as $item) {
            FilmSeat::where('film_id', $film->id)->where('seat_id', $item)->update([
                'is_ordered' => true
            ]);

            // Menyimpan data ke table detail_transaction
            DetailTransaction::create([
                'transaction_id' => Transaction::latest()->first()->id,
                'filmSeat_id' => FilmSeat::where('film_id', $film->id)->where('seat_id', $item)->first()->id,
            ]);
        }

        // Kurangi saldo user
        User::find(auth()->user()->id)->update([
            'balance' => auth()->user()->balance - $total_cost
        ]);

        // Insert succeed order to detail order



        Alert::success('Pemesanan Berhasil','Berhasil memesan tiket');
        return redirect()->route('films.index');
    }
}
