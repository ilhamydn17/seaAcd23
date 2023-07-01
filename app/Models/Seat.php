<?php

namespace App\Models;

use App\Models\FilmSeat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seat extends Model
{
    use HasFactory;
    protected $table = 'seats';
    protected $guarded = ['id'];
    public function filmSeat(){
        return $this->hasMany(FilmSeat::class);
    }
}
