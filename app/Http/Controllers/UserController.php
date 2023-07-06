<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\DetailTransaction;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\TopUpBalanceRequest;

class UserController extends Controller
{
    public function index(){
        return view('app.userPage.user-info');
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

    public function historyTransaction(){
        $transact_history = Transaction::where('user_id', auth()->user()->id)->latest()->get();
        return view('app.userPage.history-transaction', compact('transact_history'));
    }

    public function detailTransaction($id){
        $detail_transact = DetailTransaction::where('transaction_id', $id)->get();
        $ageUser = Carbon::parse(auth()->user()->birthdate)->age;
        return view('app.userPage.detail-history', compact(['detail_transact','ageUser']));
    }
}
