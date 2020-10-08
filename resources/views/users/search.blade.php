@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <h3 class="card-header">ジャンル検索</h3>
                <h4>音楽</h4>
                @foreach ($genres_music as $genre)
                    <a type="button" href="{{ route('users.index',['genre_id' => $genre->id]) }}">{{$genre->genre_name }}</a>
                @endforeach
                <br>

                <h4>イラスト</h4>
                @foreach ($genres_illustration as $genre)
                    <a type="button" href="{{ route('users.index',['genre_id' => $genre->id]) }}">{{$genre->genre_name }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
