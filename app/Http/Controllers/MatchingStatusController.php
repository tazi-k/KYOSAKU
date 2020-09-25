<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MatchingStatus;
use Auth;
use App\User;


class MatchingStatusController extends Controller
{
    public function create($id)
    {
        
        return view('users.create',compact('id'));
    }
    
    public function store(Request $request,$id)
    {

        $matchingStatus = new MatchingStatus;

        
        $matchingStatus->to_user_id = $id;
        $matchingStatus->from_user_id = Auth::id();
        //status 0.片方依頼　1.相互依頼
        $matchingStatus->status = 0;

        $matchingStatus->message = $request->message;

        $matchingStatus->save();

        return redirect()->route('users.index');
    }

    public function index($id)
    {
        $user = User::find($id);
        //応答待ち
        $statusToAsk = MatchingStatus::where('from_user_id',Auth::id())->get();
        $statusToAsk->load('to_user',);
        //statusページで相手の名前とかを表示させたいから読み込んでいる
        //get()でデータ全取得
        // リレーション先のuserテーブルのデータを読み込んでいる
        
        //依頼
        $statusToMe = MatchingStatus::where('to_user_id',Auth::id())->get();
        $statusToMe->load('from_user');

        return view('users.status',compact('statusToAsk','statusToMe','user'));
    }

    public function destroy(Request $request,$id,$statusToAsk)
    {
        // dd($statusToAsk);
        MatchingStatus::find($statusToAsk)->delete();

        return redirect()->route('users.index');
    }

    
}
