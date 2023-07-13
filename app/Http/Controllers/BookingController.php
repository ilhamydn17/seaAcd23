<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaction;
use App\Models\Film;
use App\Models\Seat;
use App\Models\User;
use App\Models\FilmSeat;
use App\Models\Transaction;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class BookingController extends Controller
{
    public function bookSeat(Film $film){
        $ageUser = Carbon::parse(auth()->user()->birthdate)->age;
        return view('app.booking.seat-booking', compact(['film','ageUser']));
    }

    public function bookCheckout(Film $film){
        // Simpan informasi usia user ke variabel
        $ageForm = request()->input('age_form');

        // Kembalikan jika user belum memilih kursi
        if(request()->input('seats') == null){
            Alert::toast('Maaf, anda belum memilih kursi', 'warning');
            return redirect()->back();
        }

        // Kembalikan jika usia user di bawah age rating
        if($ageForm < $film->age_rating ){
            Alert::toast('Maaf, usia anda dibawah age rating', 'warning');
            return redirect()->back();
        }

        // Kembalikan jika user memilih kursi lebih dari 6
        if(count(request()->input('seats')) > 6){
            Alert::toast('Maaf, maksimal 6 kursi yang dapat dipesan', 'warning');
            return redirect()->back();
        }

        // simpan data kursi yang dipesan ke variabel
        $seatNumber = [];
        $confirmDataSeat = [];
        foreach (request()->input('seats') as $item) {
            $confirmDataSeat[] = $item;
            $seatNumber[] = Seat::find($item)->seat_number;
        }

        // menghitung total cost berdasarkan jumlah kursi yang dipesan
        $totalCost = count($seatNumber) * $film->ticket_price;

        return view('app.booking.checkout-booking', compact(['film','ageForm','totalCost', 'seatNumber', 'confirmDataSeat']));
    }

    public function confirmCheckout(Film $film){
        // Simpan nilai dari input ke variabel
        $total_cost = request()->input('total_cost');
        $seats_booked = request()->input('confirm_data_seat'); // array

        // Jika saldo dari user kurang dari total cost maka kembalikan (tidak bisa lanjut proses konfirmasi pemesanan tiket)
        if(auth()->user()->balance < $total_cost){
            Alert::error('Pemesanan Gagal','saldo anda tidak mencukupi');
            return redirect()->route('films.book', $film);
        }

        // Menyimpan data pesanan ke tabel transaction
        Transaction::create([
            'user_id' => auth()->user()->id,
            'total_cost'=> $total_cost,
        ]);

        // Update status kursi yang dipesan menjadi true(sudah dipesan)
        foreach ($seats_booked as $item) {
            // Update status kursi
            FilmSeat::where('film_id', $film->id)->where('seat_id', $item)->update([
                'is_ordered' => true
            ]);
            // Menyimpan data ke table detail_transaction
            DetailTransaction::create([
                'transaction_id' => Transaction::latest()->first()->id,
                'filmSeat_id' => FilmSeat::where('film_id', $film->id)->where('seat_id', $item)->first()->id,
            ]);
        }

        // Kurangi saldo user berdasarkan dengan total cost
        User::find(auth()->user()->id)->update([
            'balance' => auth()->user()->balance - $total_cost
        ]);

        // Tampilkan pesan sukses dan kembalikan ke halaman film
        Alert::success('Pemesanan Berhasil','Berhasil memesan tiket');
        return redirect()->route('films.index');
    }

    public function cancelBooking($transId){
        $detailTrans = DetailTransaction::where('transaction_id', $transId)->get();
        $userId = auth()->user()->id;

        // Update kembali data kursi yang sudah dipesan agar status kembali menjadi kosong
        foreach($detailTrans as $item){
            FilmSeat::find($item->filmSeat_id)->update([
                'is_ordered' => false
            ]);
        }

        // Refund saldo ke user
        $refund = Transaction::find($transId)->total_cost;
        User::find($userId)->update([
            'balance' => auth()->user()->balance + $refund
        ]);

        // Hapus data transaksi
        Transaction::find($transId)->delete();
        Alert::toast('Berhasil membatalkan pesanan', 'success');

        return redirect()->route('user.profile');
    }
}
