<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MatchingStatus;
use Auth;


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

        $matchingStatus->message = $request->message;

        $matchingStatus->save();

        return redirect()->route('users.index');
    }
}
