@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">

                <h3 class="card-header">依頼している</h3>
                @foreach ($statusToAsk as $AskUser)
                    <div class="card-body">
                        <h5 class="card-title">名前：{{ $AskUser->to_user->name }}</h5>
                        <img src="{{ $AskUser->to_user->image_path }}" alt="画像">
                        <h6>{{ $AskUser->created_at }}</h6>
                    </div>
                @endforeach

                <h3 class="card-header">依頼されている</h3>
                @foreach ($statusToMe as $getUser)
                    <div class="card-body">
                        <h5 class="card-title">名前：{{ $getUser->from_user->name }}</h5>
                        <img src="{{ $getUser->from_user->image_path }}" alt="画像">
                        <a type="button" href="{{ route('matching.show',[$user->id,$getUser->id]) }}">
                            あなたへのメッセージ</a>
                        <h6>{{ $getUser->created_at }}</h6>
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

                <h3 class="card-header">共作中</h3>
                @foreach ($statusToMatching as $matchingUser)
                    @if ($matchingUser->from_user->id !== Auth::id())
                        <div class="card-body">
                            <h5 class="card-title">名前：{{ $matchingUser->from_user->name }}</h5>
                            <img src="{{ $matchingUser->from_user->image_path }}" alt="画像">
                            <form action="{{ route('rooms.store',$matchingUser->id) }}" method="POST">
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-success">トークへ</button>
                            </form>
                        </div>
                    @elseif ($matchingUser->to_user->id !== Auth::id())
                        <div class="cardbody">
                            <h5 class="card-title">名前：{{ $matchingUser->to_user->name }}</h5>
                            <img src="{{ $matchingUser->to_user->image_path }}" alt="画像">
                            <form action="{{ route('rooms.store',$matchingUser->id) }}" method="POST">
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-success">トークへ</button>
                            </form>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
