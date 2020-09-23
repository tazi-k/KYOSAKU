@extends('layouts.app')

@section('content')
<a class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
              <img src="{{ $user->image_path }}" alt="画像">
                <h5>アーティスト名：{{ $user->name }}</h5>
            </div>
            <div class="card-body">
                {{-- <p>ジャンル：{{ $user-> }}</p>             --}}
                <p class="card-text">SNSリンク：{{ $user->sns_link }}</p>
                <p>年齢：{{ $user->age }}</p>            
                <p>過去作品など：{{ $user->work_link }}</p>            
                {{-- <p>お住まい：{{ $user->prefecture_id }}</p>             --}}         
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <form action="{{ route('matching.create',$user->id) }}">
                        <input type="submit" value="&#xf2b5; 共作りたい！" class="fas btn btn-success">
                    </form>
                </div>
                <div class="col-md-3">
                    <form action="{{ route('users.create') }}">
                        <input type="submit" value="&#xf21e; 取り消す" class="fas btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
    </div>
</a>

@endsection