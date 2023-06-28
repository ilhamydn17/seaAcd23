<?php

namespace App\Models;

use App\Models\Film;
use App\Models\Seat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderedSeat extends Model
{
    use HasFactory;

    protected $table = 'ordered_seats';
    protected $guarded = ['id'];

    public function film(){
        return $this->belongsTo(Film::class);
    }

    public function seat(){
        return $this->belongsTo(Seat::class);
    }
}
