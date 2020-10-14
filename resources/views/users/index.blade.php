@extends('layouts.app')

@section('content')
<style>
    .pagination {
        justify-content: center;
    }

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- フラッシュメッセージ -->
            @if (session('flash_message'))
            <div class="kyo">
                <div class="alert alert-success text-center" style="width: 400px; margin:0 auto;margin-bottom: 10px">
                    <div class="message">
                        {{ session('flash_message') }}
                    </div>
                </div>
            </div>
            @endif

            {{-- <div class="card text-center"> --}}
            <div class="text-center">
                @if($genre)
                @if($genre->users->isEmpty())
                <div class="box8 center">
                    <h3 class="card-header" style="color: black">
                        {{ $genre->genre_name }}のユーザー
                    </h3>
                </div>
                <div class="card-1 center">
                    <i class="fas fa-search"></i> 見つかりませんでした
                </div>
                @else
                <div class="box8 center">
                    <h3 class="card-header" style="color: black">
                        {{ $genre->genre_name }}のユーザー
                    </h3>
                </div>

                <div class="container">
                    <div class="row justify-content-center">
                        @foreach ($genre->users as $genre_user)
                        <div class="card col-md-3 mx-4 my-3 pr-0 pl-0">
                            <div class="my-3">
                                <img src="{{ $genre_user->image_path }}" width="190px" height="150px" alt="画像"
                                    class="index-img">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">名前：{{ $genre_user->name }}</h5>
                                <p class="card-text">{{ $genre_user->profile }}</p>
                                <a href="{{ route('users.show', $genre_user->id) }}" class="btn btn-primary">詳細へ</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                @else
                <div class="box7 center">
                    <h3 class="card-header" style="color: black">
                        アーティスト一覧
                    </h3>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        @foreach ($users as $user)
                        <div class="card col-md-3 mx-4 my-3 pr-0 pl-0">
                            <div class="my-3">
                                <img src="{{ $user->image_path }}" width="190px" height="150px" alt="画像"
                                    class="index-img">
                            </div>
                            <div class="card-body pr-0 pl-0">
                                <h5 class="card-title"><span
                                        style="border-bottom: solid 1px rgb(0, 0, 0);">{{ $user->name }}</span></h5>
                                <p class="card-text">{{ $user->profile }}</p>
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">詳細へ</a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
                @endif
            </div>
        </div>
        @if($genre)
        @else
        {{ $users->links() }}
        @endif
    </div>
</div>
@endsection
