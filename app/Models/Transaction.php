<?php

namespace App\Models;

use App\Models\Film;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $guarded = ['id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function film(){
        return $this->belongsTo(Film::class);
    }
}
