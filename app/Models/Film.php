<?php

namespace App\Models;

use App\Models\OrderedSeat;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Film extends Model
{
    use HasFactory;

    protected $table = 'films';

    protected $guarded = ['id'];

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }

    public function orderedSeat(){
        return $this->hasMany(OrderedSeat::class);
    }
}
