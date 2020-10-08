<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MatchingStatus;
use Auth;
use App\User;
use App\Room;
use App\Chat;

class RoomController extends Controller
{
    //トーク画面に行く間の処理。
    //ルーム作成が既にされているかどうかを判別している。
    public function store(Request $request,$id)
    {
        $matching = MatchingStatus::find($id);
        $room = Room::where('to_user_id',$matching->to_user_id)
            ->where('from_user_id',$matching->from_user_id)->first();
        if($room)
        {
            return redirect()->route('rooms.index',$id);
        }else{
            $room = new Room;
            $room->to_user_id = $matching->to_user_id;
            $room->from_user_id = $matching->from_user_id;
            $room->save();
            return redirect()->route('rooms.index',$id);
        }
    }

    //チャット内容を表示するための処理。
    public function index($id)
    {
        $matching = MatchingStatus::find($id);
        $room = Room::where('to_user_id',$matching->to_user_id)
            ->where('from_user_id',$matching->from_user_id)->first();
        $room->load('chats','chats.user');
        if(Auth::id() == $room->to_user_id || Auth::id() == $room->from_user_id) {
        }else{
            return abort(403);
        }
        return view('rooms.index',compact('room','matching'));
    }
}
