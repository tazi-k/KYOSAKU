@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-center">

                <h3 class="card-header">共作状況</h3>

                <div class="container">
                    <div class="row justify-content-center">
                        @foreach ($statusToMatching as $matchingUser)
                                <div class="card col-md-3 mx-3 my-2">
                                    <h4 class="card-header">共作中</h4>
                                    <h5 class="card-title">名前：{{ $matchingUser->from_user->name }}</h5>
                                    <div>
                                        <img src="{{ $matchingUser->from_user->image_path }}" width="190px" height="150px" alt="画像" class="index-img">
                                    </div>
                                    <form action="{{ route('rooms.store',$matchingUser->id) }}" method="POST">
                                        {{csrf_field()}}
                                        <button type="submit" class="btn btn-success">トークへ</button>
                                    </form>
                                </div>
                                @endforeach
                                @foreach ($statusToMe as $getUser)
                        <div class="card col-md-3 mx-3 my-2">
                            <h4 class="card-header">共作依頼</h4>
                            <h5 class="card-title">名前：{{ $getUser->from_user->name }}</h5>
                            <div>
                                <img src="{{ $getUser->from_user->image_path }}" width="190px" height="150px" alt="画像" class="index-img">
                            </div>
                            <h6>{{ $getUser->created_at }}</h6>
                            <a type="button" href="{{ route('matching.show',[$user->id,$getUser->id]) }}">
                                あなたへのメッセージ</a>
                            <form action="{{ route('matching.update',[$user->id,$getUser->id]) }}" method="POST">
                                {{csrf_field()}}
                                {{ method_field('PATCH') }}
                                <input type="hidden" name="status" value="2">
                                <button type="submit" class="btn btn-primary">共作る</button>
                            </form>
                            <form action="{{ route('matching.update',[$user->id,$getUser->id]) }}" method="POST">
                                {{csrf_field()}}
                                {{ method_field('PATCH') }}
                                <input type="hidden" name="status" value="3">
                                <button type="submit" class="btn btn-success">ごめんなさい</button>
                            </form>
                            </div>
                        @endforeach
                        @foreach ($statusToAsk as $AskUser)
                        <div class="card col-md-3 mx-3 my-2">
                            <h4 class="card-header">応答待ち</h4>
                            <h5 class="card-title">名前：{{ $AskUser->to_user->name }}</h5>
                            <div>
                                <img src="{{ $AskUser->to_user->image_path }}" width="190px" height="150px" alt="画像" class="index-img">
                            </div>
                            <h6>{{ $AskUser->created_at }}</h6>
                        </div>
                        @endforeach
                    
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
