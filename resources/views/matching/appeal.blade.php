{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <img src="{{ $messageToMe->from_user->image_path }}" 　alt="画像">
                    <h5>アーティスト名：{{ $messageToMe->from_user->name }}</h5>
                </div>
                <div class="card-body">
                    <p>SNSリンク：{{ $messageToMe->from_user->sns_link }}</p>
                    <p>年齢：{{ $messageToMe->from_user->age }}</p>
                    <p>過去作品など：{{ $messageToMe->from_user->work_link }}</p>
                </div>
                <div class="card-footer">
                    <p>あなたへのメッセージ：{{ $messageToMe->message }}</p>
                </div>
                <a type="button" href="{{ route('matching.index',Auth::id()) }}">Back</a>
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
                                    <img src="{{ $messageToMe->from_user->image_path }}" alt="画像">
                            </div>

                            <table class="table table-bordered float-right col-md-5"
                                style="margin-top: 30px; margin-right: 0px;">
                                <tbody>

                                    <tr>
                                        <th scope="row">名前
                                        </th>
                                        <td>
                                            {{ $messageToMe->from_user->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">年齢</th>
                                        <td>
                                            {{ $messageToMe->from_user->age }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">お住まい</th>
                                        <td>
                                            {{ $fromUserPrefecture->prefecture_name }}
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <th scope="row">ジャンル</th>
                                        <td>
                                            {{ $fromUserGenre->genre_name }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">過去作品</th>
                                        <td>
                                            <a href="{{ $messageToMe->from_user->work_link }}">{{ $messageToMe->from_user->work_link }}</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">SNSリンク</th>
                                        <td>
                                            <a href="{{ $messageToMe->from_user->sns_link }}">{{ $messageToMe->from_user->sns_link }}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">KYOSAKU作品</th>
                                        <td>
                                            <a href="{{ $messageToMe->from_user->collaboration_link }}">{{ $messageToMe->from_user->collaboration_link }}</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="text-center" style="margin-bottom: -10px; margin-top:20px">
                        <h5>あなたへのメッセージ</h5>
                    </div>

                    <div class="border text-center" style="width: 450px; height:100px">
                        {{ $messageToMe->message }}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection