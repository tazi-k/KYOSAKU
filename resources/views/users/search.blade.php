@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <h3 class="card-header">ジャンル検索</h3>
                <h4 class="my-4">音楽</h4>
                <div class="container">
                <div class="row justify-content-center">
                @foreach ($genres_music as $genre)
                    <a class="col-md-2 mx-3 my-3" type="button" href="{{ route('users.index',['genre_id' => $genre->id]) }}">{{$genre->genre_name }}</a>
                    @endforeach
                </div>
                <div>
                <br>

                <h4>イラスト</h4>
                <div class="container">
                    <div class="row justify-content-center">
                        @foreach ($genres_illustration as $genre)
                            <a class="col-md-2 mx-3 my-3" type="button" href="{{ route('users.index',['genre_id' => $genre->id]) }}">{{$genre->genre_name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
