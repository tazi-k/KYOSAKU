{{-- @extends('layouts.app')

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
@endsection --}}




@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <div class="container">
                        <div class="row justify-content-center">
                            {{csrf_field()}}
                            {{ method_field('PATCH') }}
                            <div class="form-group mt-5 mr-4 pr-5">
                                    <img src="{{ $user->image_path }}" alt="画像">
                            </div>

                            <table class="table table-bordered float-right col-md-5"
                                style="margin-top: 30px; margin-right: 0px;">
                                <tbody>

                                    <tr>
                                        <th scope="row">名前
                                        </th>
                                        <td>
                                            {{ $user->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">年齢</th>
                                        <td>
                                            {{ $user->age }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">お住まい</th>
                                        <td>
                                            {{ $user->prefecture->prefecture_name }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">過去作品</th>
                                        <td>
                                            <a href="{{ $user->work_link }}">{{ $user->work_link }}</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">SNSリンク</th>
                                        <td>
                                            <a href="{{ $user->sns_link }}">{{ $user->sns_link }}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">KYOSAKU作品</th>
                                        <td>
                                            <a href="{{ $user->collaboration_link }}">{{ $user->collaboration_link }}</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="border text-center" style="width: 450px; height:100px">
                        {{ $user->profile }}
                    </div>

                    @if(Auth::user()->age)
                        @if ($statusToAsk && $statusToAsk->status == 1)
                            <h5 class="abcd">依頼中です</h5>
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                                    <form action="{{ route('matching.index',Auth::id()) }}" style="text-align: center; margin-bottom: 40px">
                                        <input type="submit" value="&#xf2b5; 共作状況で確認" class="fas btn btn-primary">
                                    </form>
        
                                @elseif ($statusToMe && $statusToMe->status == 1)
                                <h5 class="abcd">依頼がきています</h5>
                                    <form action="{{ route('matching.index',Auth::id()) }}" style="text-align: center; margin-bottom: 40px">
                                        <input type="submit" value="&#xf2b5; 共作状況で確認" class="fas btn btn-primary">
                                    </form>
        
                                @elseif ($statusToAsk && $statusToAsk->status == 2)
                                <h5 class="abcd">共作中です</h5>
                                    <form action="{{ route('matching.index',Auth::id()) }}" style="text-align: center; margin-bottom: 40px">
                                        <input type="submit" value="&#xf2b5; 共作状況で確認" class="fas btn btn-primary">
                                    </form>
        
                                @elseif ($statusToMe && $statusToMe->status == 2)
                                <h5 class="abcd">共作中です</h5>
                                    <form action="{{ route('matching.index',Auth::id()) }}" style="text-align: center; margin-bottom: 40px">
                                        <input type="submit" value="&#xf2b5; 共作状況で確認" class="fas btn btn-primary">
                                    </form>
        
                                @elseif (Auth::user()->id !== $user->id)
                                    <form action="{{ route('matching.create',Auth::id()) }}" style="text-align: center; margin-bottom: 40px">
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                                        {{-- <input type="submit" value="&#xf2b5; 共作りたい！" class="fas btn btn-success"> --}}
                                        <button type="submit" class="btn-box-2">共作りたい！</button>
                                    </form>
        
                                @else
                                    <form action="{{ route('matching.index',Auth::id()) }}" style="text-align: center; margin-bottom: 40px">
                                        <input type="submit" value="&#xf2b5; 共作状況へ" class="fas btn btn-primary">
                                    </form>
                                @endif
                            @else
                                共作するには自分のプロフィールを設定してください
                            @endif
                        </div>
        
                        @if ($statusToAsk && $statusToAsk->status !== 2)
                            <div class="col-md-3 mb-3">
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
</div>
@endsection