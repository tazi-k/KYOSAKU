@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- フラッシュメッセージ -->
            @if (session('flash_message'))
                <div class="message">
                {{ session('flash_message') }}
                </div>
            @endif

            <div class="card text-center">
                @if($genre)
                    @if($genre->users->isEmpty())
                        <h3 class="card-header">
                            見つかりませんでした
                        </h3>
                    @else
                        <h3 class="card-header">
                        {{ $genre->genre_name }}のユーザー
                        </h3>
                        @foreach($genre->users as $genre_user)
                            <div class="card-body">
                                <img src="{{ $genre_user->image_path }}" alt="画像">
                                <h5 class="card-title">名前：{{ $genre_user->name }}</h5>
                                <p class="card-text">{{ $genre_user->profile }}</p>
                                <a href="{{ route('users.show', $genre_user->id) }}" class="btn btn-primary">詳細へ</a>
                            </div>
                        @endforeach
                    @endif
                @else
                    <h3 class="card-header">
                        アーティスト一覧
                    </h3>
                    @foreach ($users as $user)
                        <div class="card-body">
                            <img src="{{ $user->image_path }}" alt="画像">
                            <h5 class="card-title">名前：{{ $user->name }}</h5>
                            <p class="card-text">{{ $user->profile }}</p>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">詳細へ</a>
                        </div>
                    @endforeach
                @endif
            </div>
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection
