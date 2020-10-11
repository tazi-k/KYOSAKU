<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChatRequest;
use App\MatchingStatus;
use Auth;
use App\User;
use App\Room;
use App\Chat;

class ChatController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //チャット保存処理。誰がどのルームで何を送ったかを保存している。
    public function store(ChatRequest $request,$room)
    {
        $chat = new Chat;
        $chat->message = $request->body;
        $chat->room_id = $room;
        $chat->user_id = Auth::id();
        $matching = $request->matching;
        $chat->save();
        
        return redirect()->route('rooms.index',$matching);
    }

}
