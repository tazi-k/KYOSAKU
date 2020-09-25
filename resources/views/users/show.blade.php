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
                {{-- <p>ジャンル：{{ $user-> }}</p> --}}
                <p class="card-text">SNSリンク：{{ $user->sns_link }}</p>
                <p>年齢：{{ $user->age }}</p>
                <p>過去作品など：{{ $user->work_link }}</p>
                {{-- <p>お住まい：{{ $user->prefecture_id }}</p> --}}
            </div>

            <div class="row justify-content-center">
                <div class="col-md-3">

                    @if ($statusToAsk)
                    依頼中です
                    <form action="{{ route('matching.index',$user->id) }}">
                        <input type="submit" value="&#xf2b5; 共作状況で確認" class="fas btn btn-primary">
                    </form>

                    @elseif ($statusToMe)
                    依頼がきています
                    <form action="{{ route('matching.index',$user->id) }}">
                        <input type="submit" value="&#xf2b5; 共作状況で確認" class="fas btn btn-primary">
                    </form>

                    @elseif (Auth::user()->id !== $user->id)
                    <form action="{{ route('matching.create',$user->id) }}">
                        <input type="submit" value="&#xf2b5; 共作りたい！" class="fas btn btn-success">
                    </form>

                    @else
                    <form action="{{ route('matching.index',$user->id) }}">
                        <input type="submit" value="&#xf2b5; 共作状況へ" class="fas btn btn-primary">
                    </form>
                    @endif

                </div>

                @if ($statusToAsk)
                <div class="col-md-3">
                    <form action="{{ route('matching.destroy',[$user->id,$statusToAsk->id]) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="submit" value="&#xf21e; 取り消す" class="fas btn btn-danger">
                    </form>
                </div>
                @endif
            </div>
        </div>
    </div>
</a>

@endsection

{{-- 依頼されている場合
共作りたいを消し、共作状況へ飛ばすボタンを表示させる。上にコメント

依頼している場合
共作りたいを消し、共作状況へ飛ばすボタンを表示させる。上にコメント

お互い何も押していない場合
デフォルトの共作りたいボタンを表示させる。 --}}


{{-- 
    次すること
共作依頼取り消し 
--}}

{{-- 次すること
共作状況→あなたへのメッセージボタンの作成→相手の詳細(show)と自分宛のメッセージを表示 --}}