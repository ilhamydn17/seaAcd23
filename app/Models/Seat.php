<?php

namespace App\Models;

use App\Models\OrderedSeat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seat extends Model
{
    use HasFactory;
    protected $table = 'seats';
    protected $guarded = ['id'];
    public function orderedSeat(){
        return $this->hasMany(OrderedSeat::class);
    }
}
