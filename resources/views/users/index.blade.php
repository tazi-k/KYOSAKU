@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card text-center">
    <h3 class="card-header">
      アーティスト一覧
    </h3>
    {{ method_field('PATCH') }}
    @foreach ($users as $user)
    <div class="card-body">
      <img src="{{ $user->image_path }}" alt="画像">
      <h5 class="card-title">名前：{{ $user->name }}</h5>
      <p class="card-text">{{ $user->profile }}</p>
      <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">詳細へ</a>
    </div>
    <div class="card-footer text-muted">
      
    </div>
    @endforeach
  </div>
      </div>
  </div>
</div>
@endsection