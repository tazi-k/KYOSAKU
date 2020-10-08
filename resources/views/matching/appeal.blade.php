@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <img src="{{ $messageToMe->from_user->image_path }}" 　alt="画像">
                <h5>アーティスト名：{{ $messageToMe->from_user->name }}</h5>
            </div>
            <div class="card-body">
                <p>SNSリンク：{{ $messageToMe->from_user->sns_link }}</p>
                <p>年齢：{{ $messageToMe->from_user->age }}</p>
                <p>過去作品など：{{ $messageToMe->from_user->work_link }}</p>
            </div>
            <div class="card-footer">
                <p>あなたへのメッセージ：{{ $messageToMe->message }}</p>
            </div>
            <a type="button" href="{{ route('matching.index',Auth::id()) }}">Back</a>
        </div>
    </div>
</div>
@endsection
