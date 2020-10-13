<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MatchingStatus;
use Auth;
use App\User;
use Mail;


class MatchingStatusController extends Controller
{
    //「共作りたい」を押した時の処理。誰が押したか渡してあげてる。
    public function create($id, Request $request)
    {
        $toUser = $request->user_id;
        return view('matching.create',compact('id','toUser'));
    }
    
    //status変更の処理。ここでメール通知を送っている。
    public function store(Request $request,$id)
    {
        //status 1.片方依頼　2.相互依頼 3.拒否
        $matchingStatus = new MatchingStatus;
        $matchingStatus->to_user_id = $request->toUser_id;
        $matchingStatus->from_user_id = $id;
        $matchingStatus->status = MatchingStatus::ONE_SIDE;
        $matchingStatus->message = $request->message;
        $matchingStatus->load('to_user');
        $matchingStatus->save();
        
        Mail::send('mails.contact', [
            'user' => Auth::user(),
            'contact' => $request->contact,
        ], function ($message) use ($matchingStatus) {
            $message->to($matchingStatus->to_user->email)->subject('共作依頼が届きました！');
        });
        return redirect()->route('users.index');
    }

    //共作状況で表示する情報をとってきている。　
    //$statusToMatchingは共作中の情報で、toかfrom（自分じゃない方）の情報を取ってきている。
    public function index($id)
    {
        $user = User::find($id);
        //応答待ちの状態
        $statusToAsk = MatchingStatus::where('from_user_id',Auth::id())
            ->where('status',MatchingStatus::ONE_SIDE)
            ->get();
        $statusToAsk->load('to_user');
        //依頼されている状態
        $statusToMe = MatchingStatus::where('to_user_id',Auth::id())
            ->where('status',MatchingStatus::ONE_SIDE)
            ->get();
        $statusToMe->load('from_user');
        $statusToMatching = MatchingStatus::where('status',MatchingStatus::EACH_SIDE)
            ->where(function($query){
                $query->where('to_user_id',Auth::id())
                ->orWhere('from_user_id',Auth::id());
            })
            ->get();
        $statusToMatching->load('from_user','to_user');
        
        return view('matching.status',compact('statusToAsk','statusToMe','user','statusToMatching'));
    }

    //依頼を取り消す処理。
    public function destroy(Request $request,$id,$statusToAsk)
    {
        MatchingStatus::find($statusToAsk)->delete();
        return redirect()->route('users.index');
    }

    //依頼されている状況での、自分宛のメッセ表示ページに飛ばす。
    //相手の情報をとってきている。
    public function show($id,$getUser)
    {
        $messageToMe = MatchingStatus::find($getUser);
        $messageToMe->load('from_user');
        return view('matching.appeal',compact('messageToMe'));
    }

    //依頼に対しての返答処理。(status更新)
    //マッチング成立した場合と拒否された場合のメール送信処理。
    public function update(Request $request,$id,$getUser)
    {
        $matching = MatchingStatus::find($getUser);
        $matching->status = $request->status;
        $matching->load('from_user');
        $matching->save();
        if($matching->status === MatchingStatus::EACH_SIDE){
            Mail::send('mails.matching', [
                'user' => Auth::user(),
                'contact' => $request->contact,
            ], function ($message)use ($matching) {
                $message->to($matching->from_user->email)->subject('共作コラボ成立しました！');
            });
        }else{
            Mail::send('mails.sorry', [
                'user' => Auth::user(),
                'contact' => $request->contact,
            ], function ($message)use ($matching) {
                $message->to($matching->from_user->email)->subject('ごめんなさいが届きました...');
            });
        }
        return redirect()->route('matching.index',$id);
    }
}
