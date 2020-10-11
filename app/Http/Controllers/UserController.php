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
    //プロフィール設定済みのユーザーを一覧表示する処理。
    //ジャンル検索された場合は、そのジャンルで登録している者のみ表示。
    public function index(Request $request)
    {
        $genre = null;
        if($request->genre_id)
        {
            $genre = Genre::with('users')->find($request->genre_id);
        }
        $users = User::where('age','>',9)->orderBy('created_at','desc')->paginate(9);
        return view('users.index', compact('users','genre'));
    }
    //whereNotNull 
    //if文とってみる

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //選択したユーザーの詳細情報をとってきている。
    //依頼した・されたユーザーを条件分岐でとってきている。
    public function show($id)
    {
        $user = User::find($id);
        $user->load('prefecture','genres');
        //応答待ちの状態
        $statusToAsk = MatchingStatus::where('from_user_id',Auth::id())
                                        ->where('to_user_id',$user->id)->first();
        //依頼されている状態
        $statusToMe = MatchingStatus::where('to_user_id',Auth::id())
                                        ->where('from_user_id',$user->id)->first();
        return view('users.show', compact('user','statusToAsk','statusToMe'));
    }
    //変数命名

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //プロフ編集に必要な項目をとってきたりしている。
    public function edit()
    {
        $ages = [];
        for($age = 10; $age < 51; $age++){
            $ages[] = $age;
        }
        $user = Auth::user();
        $prefectures = Prefecture::all();
        //ID
        $genres_music = Genre::where('id','<',15)->get();
        $genres_illustration = Genre::where('id','>',14)->get();
        $my_genres = User::find($user->id)->genres()->get();
        $my_genres_id = [];
        foreach($my_genres as $my_genre)
        {
            $my_genres_id[] = $my_genre->id;
        }
        if(Auth::id() !== $user->id) {
            return abort(403);
        }
        return view('users.edit',compact('user','prefectures','ages','genres_music','genres_illustration','my_genres_id'));
            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //編集処理。ジャンルは一旦白紙状態にして再度保存し直す。
    public function update(UserRequest $request)
    {
        $user = Auth::user();
        $user->genres()->detach($user->genre_id);
        foreach($request->genre_id as $genre_id)
        {
            $user->genres()->attach($genre_id);
        }

        $user->sns_link = $request->sns_link;
        $user->profile = $request->profile;
        $user->work_link = $request->work_link;
        $user->collaboration_link = $request->collaboration_link;
        $user->age = $request->age;
        $user->prefectures_id = $request->prefectures_id;
        $user->name = $request->name;

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
        return redirect()->route('users.index')->with('flash_message', '更新されました！');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //退会処理。ユーザー情報を消している。
    public function destroy($id)
    {
        $user = Auth::user();
        $user->delete();
        if(Auth::id() !== $user->id) {
            return abort(403);
        }
        return redirect()->route('users.index');
    }

    public function search()
    {
        return view('users.search');
    }
}
