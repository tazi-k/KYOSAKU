<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prefecture;
use App\Genre;
use Auth;
use App\User;
use App\Http\Requests\UserRequest;
use JD\Cloudder\Facades\Cloudder;
use App\MatchingStatus;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('age','>',9)->get();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);



        //応答待ち
        $statusToAsk = MatchingStatus::where('from_user_id',Auth::id())
                                        ->where('to_user_id',$user->id)->first();
        // $statusToAsk->load('to_user',);
        // //依頼
        $statusToMe = MatchingStatus::where('to_user_id',Auth::id())
                                        ->where('from_user_id',$user->id)->first();
        // $statusToMe->load('from_user');


        return view('users.show', compact('user','statusToAsk','statusToMe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        // Laravelには基本PHPを書かないからこっちに書いた
        $ages = [];
        for($i = 10; $i < 51; $i++){
            $ages[] = $i;
        }
        $user = Auth::user();
        $prefectures = Prefecture::all();
        $genres = Genre::all();
        
        return view('users.edit',compact('user'),[
            // userディレクトリのedit.blade.phpと言う意味
            'prefectures' => $prefectures,
            'ages' => $ages,
            'genres' => $genres,
            // 茶色の文字(下の方)はキー名
            ]);
            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $user->sns_link = $request->sns_link;
        $user->profile = $request->profile;
        $user->work_link = $request->work_link;
        $user->collaboration_link = $request->collaboration_link;
        $user->age = $request->age;
        // $user->prefectures_id = $request->prefectures_id;
        $user->name = $request->name;
        $user->password = $request->password;

        if ($image = $request->file('image')) {
            $image_path = $image->getRealPath();
            Cloudder::upload($image_path, null);
            $publicId = Cloudder::getPublicId();
            $logoUrl = Cloudder::secureShow($publicId,[
                'width' => 200,
                'height' => 200
            ]);
            $user->image_path = $logoUrl;
            $user->public_id = $publicId;
        }
        $user -> save();

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();

        $user->delete();

        return redirect()->route('users.index');
    }
}
