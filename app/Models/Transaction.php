<?php

namespace App\Models;

use App\Models\User;
use App\Models\DetailTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $with = ['user'];
    protected $guarded = ['id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function detailTransaction(){
        return $this->hasMany(DetailTransaction::class);
    }
}
