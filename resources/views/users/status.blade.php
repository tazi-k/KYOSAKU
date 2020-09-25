@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card text-center">
    <h3 class="card-header">
      依頼している
    </h3>
    @foreach ($statusToAsk as $AskUser)
    <div class="card-body">
      <h5 class="card-title">名前：{{ $AskUser->to_user->name }}</h5>
      <img src="{{ $AskUser->to_user->image_path }}" alt="画像">
    </div>
    @endforeach

    <h3 class="card-header">
      依頼されている
    </h3>
    @foreach ($statusToMe as $getUser)
    <div class="card-body">
      <h5 class="card-title">名前：{{ $getUser->from_user->name }}</h5>
      <img src="{{ $getUser->from_user->image_path }}" alt="画像">
      <a type="button" href="{{ route('matching.show',[$user->id,$getUser->id]) }}">あなたへのメッセージ</a>
    </div>
    @endforeach
  </div>
      </div>
  </div>
</div>
@endsection