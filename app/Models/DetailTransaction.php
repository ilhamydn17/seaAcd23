<?php

namespace App\Models;

use App\Models\FilmSeat;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailTransaction extends Model
{
    use HasFactory;

    protected $table = 'detail_transactions';
    protected $guarded = ['id'];

    protected $with = ['transaction', 'filmSeat'];

    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }

    public function filmSeat(){
        return $this->belongsTo(FilmSeat::class);
    }
}
