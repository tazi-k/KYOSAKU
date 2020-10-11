@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <img src="{{ $user->image_path }}" alt="画像">
                <h5>アーティスト名：{{ $user->name }}</h5>
            </div>
            <div class="card-body">
                <p>ジャンル：
                    @foreach($user->genres as $genre)
                        {{ $genre->genre_name }}
                    @endforeach
                </p>
                <p class="card-text">SNSリンク：{{ $user->sns_link }}</p>
                <p>年齢：{{ $user->age }}</p>
                <p>過去作品など：{{ $user->work_link }}</p>
                <p>KYOSAKU作品：{{ $user->collaboration_link }}</p>
                <p>自己紹介：{{ $user->profile }}</p>
                <p>お住まい：{{ $user->prefecture->prefecture_name }}</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-3">
                    @if(Auth::user()->age)
                        @if ($statusToAsk && $statusToAsk->status == 1)
                            依頼中です
                            <form action="{{ route('matching.index',Auth::id()) }}">
                                <input type="submit" value="&#xf2b5; 共作状況で確認" class="fas btn btn-primary">
                            </form>

                        @elseif ($statusToMe && $statusToMe->status == 1)
                            依頼がきています
                            <form action="{{ route('matching.index',Auth::id()) }}">
                                <input type="submit" value="&#xf2b5; 共作状況で確認" class="fas btn btn-primary">
                            </form>

                        @elseif ($statusToAsk && $statusToAsk->status == 2)
                            共作中です
                            <form action="{{ route('matching.index',Auth::id()) }}">
                                <input type="submit" value="&#xf2b5; 共作状況で確認" class="fas btn btn-primary">
                            </form>

                        @elseif ($statusToMe && $statusToMe->status == 2)
                            共作中です
                            <form action="{{ route('matching.index',Auth::id()) }}">
                                <input type="submit" value="&#xf2b5; 共作状況で確認" class="fas btn btn-primary">
                            </form>

                        @elseif (Auth::user()->id !== $user->id)
                            <form action="{{ route('matching.create',Auth::id()) }}">
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <input type="submit" value="&#xf2b5; 共作りたい！" class="fas btn btn-success">
                            </form>

                        @else
                            <form action="{{ route('matching.index',Auth::id()) }}">
                                <input type="submit" value="&#xf2b5; 共作状況へ" class="fas btn btn-primary">
                            </form>
                        @endif
                    @else
                        共作するには自分のプロフィールを設定してください
                    @endif
                </div>

                @if ($statusToAsk)
                    <div class="col-md-3">
                        <form action="{{ route('matching.destroy',[$user->id,$statusToAsk->id]) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="submit" value="&#xf21e; 取り消す" class="fas btn btn-danger" onclick='return confirm("取り消しますか？");'>
                        </form>
                    </div>
                @endif
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
