<?php

namespace App\Http\Controllers;

use App\Http\Requests\TopUpBalanceRequest;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index(){
        return view('app.userBalance.user_balance');
    }

    public function topupBalance(TopUpBalanceRequest $request){
        $userId = auth()->user()->id;
        $user = User::find($userId);
        $nominal = $request->input('nominal');

        if($nominal < 10000){
            Alert::toast('Minimal Top Up Rp. 10.000','warning');
            return redirect()->route('user.profile');
        }

        if($user->update(['balance'=> $user->balance + $nominal])){
            Alert::success('Sukses','Top Up Saldo Berhasil');
            return redirect()->route('user.profile');
        }else{
            Alert::error('Gagal','Top Up Saldo Gagal');
            return redirect()->route('user.profile');
        }
    }
}
