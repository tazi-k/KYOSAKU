@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('users.update',Auth::id())}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <img src="{{ $user->image_path }}" alt="画像">
                    <label for="image">プロフィール画像</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>

                <div class="form-group">
                    <label>名前</label>
                    <input type="text" class="form-control" placeholder="アーティスト名を入力してください" value="{{ $user->name }}"
                        name="name">
                </div>

                <div class="form-group">
                    <label>年齢</label><br>
                    <select name="age">
                            <option value="">選択する</option>
                        {{-- configにかいてもいい --}}
                        @foreach ($ages as $age)
                            <option value="{{ $age }}" {{ $user->age === $age ? 'selected' : '' }}>{{ $age }}</option>
                        @endforeach
                    </select>
                    <label>歳</label>
                </div>

                <div class="form-group">
                    <label>自己紹介文</label>
                    <textarea class="form-control" placeholder="自己紹介文を記載してください" rows="5"
                        name="profile">{{ $user->profile }}</textarea>
                </div>

                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" placeholder="Eメールを入力してください" value="{{ $user->email }}" name="email">
                </div>

                <div class="form-group">
                    <label>過去作品リンク</label>
                    <input type="text" class="form-control" placeholder="過去作品のリンクを記載してください"
                        value="{{ $user->work_link }}" name="work_link">
                </div>

                <div class="form-group">
                    <label>KYOSAKU作品リンク</label>
                    <input type="text" class="form-control" placeholder="本サイトにて完成したコラボ作品を記載してください"
                        value="{{ $user->collaboration_link }}" name="collaboration_link">
                </div>

                <div class="form-group">
                    <label>SNSリンク</label>
                    <input type="text" class="form-control" placeholder="SNSのリンクを記載して下さい" value="{{ $user->sns_link }}"
                        name="sns_link">
                </div>

                <div class="form-group">
                    <label>お住まい</label><br>
                    <select name="prefectures_id">
                        @if($user->prefectures_id == null)
                            <option value="" selected="">選択する</option>
                        @endif
                        @foreach ($prefectures as $prefecture)
                            @if($user->prefectures_id == $prefecture->id || old('prefectures_id')== $prefecture->id)
                                <option value="{{ $prefecture->id }}" selected="">{{$prefecture->prefecture_name }}</option>
                            @else
                                <option value="{{ $prefecture->id }}">{{ $prefecture->prefecture_name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>ジャンル：音楽</label><br>
                    @foreach ($genres_music as $genre)
                        <input type="checkbox" name="genre_id[]" value="{{ $genre->id }}"
                        {{ in_array($genre->id,$my_genres_id) ? "checked" : "" }}>
                        <label>{{ $genre->genre_name }}</label>
                    @endforeach
                </div>

                <div class="form-group">
                    <label>ジャンル：イラスト</label><br>
                    @foreach ($genres_illustration as $genre)
                        <input type="checkbox" name="genre_id[]" value="{{ $genre->id }}"
                        {{ in_array($genre->id,$my_genres_id) ? "checked" : "" }}>
                        <label>{{ $genre->genre_name }}</label>
                    @endforeach
                </div>

                <button type="submit" class="btn btn-primary">作成する</button>
            </form>
            
            <form action="{{ route('users.destroy',Auth::id()) }}" method="POST">
                {{ csrf_field('DELETE') }}
                {{ method_field('DELETE') }}
                <input type="submit" value="退会する" class="btn btn-danger" onclick='return confirm("退会しますか？");'>
            </form>
        </div>
    </div>
</div>
@endsection
