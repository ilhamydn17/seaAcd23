<?php

namespace App\Models;

use App\Models\Film;
use App\Models\Seat;
use App\Models\DetailTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FilmSeat extends Model
{
    use HasFactory;

    protected $table = 'film_seats';
    protected $guarded = ['id'];
    protected $with = ['film', 'seat'];

    public function film(){
        return $this->belongsTo(Film::class);
    }

    public function seat(){
        return $this->belongsTo(Seat::class);
    }

    public function detailTransaction(){
        return $this->hasMany(DetailTransaction::class);
    }
}
