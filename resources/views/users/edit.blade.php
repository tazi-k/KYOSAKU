@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (session('flash_message'))
                <div class="alert alert-danger">
                    <ul>
                        <li>
                            {{ session('flash_message') }}
                        </li>
                    </ul>
                </div>
                @endif
                <form action="{{ route('users.update',Auth::id())}}" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row justify-content-center">
                            {{csrf_field()}}
                            {{ method_field('PATCH') }}
                            <div class="form-group mt-5 mr-4 pr-5">
                                <label>
                                    @if($user->image_path)
                                    <h5><span class="badge badge-danger">必須</span></h5>
                                    <img src="{{ $user->image_path }}" alt="画像" style="max-width: 150px; margin-left: 60px;">
                                    <input type="file" class="form-control-file" id="image" name="image">
                                    @else
                                    <img src="https://cdn.pixabay.com/photo/2020/01/31/07/53/man-4807395_1280.jpg"
                                        alt="画像" 　style="max-width: 150px; margin-left: 60px;">
                                    <input type="file" class="form-control-file mt-3" id="image" name="image">
                                    @endif
                                </label>
                            </div>

                            <table class="table table-bordered float-right col-md-5"
                                style="">
                                <tbody>

                                    <tr>
                                        <th scope="row">名前<span class="badge badge-danger">必須</span>
                                        </th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="アーティスト名"
                                                    value="{{old('name',$user->name) }}" name="name">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">年齢<span class="badge badge-danger">必須</span></th>
                                        <td>
                                            <div class="form-group">
                                                <select name="age">
                                                    <option value="">選択する</option>
                                                    {{-- configにかいてもいい --}}
                                                    @foreach ($ages as $age)
                                                    <option value="{{ $age }}"
                                                        {{ $user->age === $age ? 'selected' : '' }}>
                                                        {{ $age }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                <label>歳</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">お住まい<span class="badge badge-danger">必須</span></th>
                                        <td>
                                            <div class="form-group">
                                                <select name="prefectures_id">
                                                    @if($user->prefectures_id == null)
                                                    <option value="" selected="">選択する</option>
                                                    @endif
                                                    @foreach ($prefectures as $prefecture)
                                                    @if($user->prefectures_id == $prefecture->id ||
                                                    old('prefectures_id')==
                                                    $prefecture->id)
                                                    <option value="{{ $prefecture->id }}" selected="">
                                                        {{$prefecture->prefecture_name }}
                                                    </option>
                                                    @else
                                                    <option value="{{ $prefecture->id }}">
                                                        {{ $prefecture->prefecture_name }}
                                                    </option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">過去作品<span class="badge badge-danger">必須</span></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="過去作品のリンク"
                                                    value="{{old('work_link',$user->work_link) }}" name="work_link">
                                            </div>
                                        </td>
                                    </tr>



                                    <tr>
                                        <th scope="row">E-mail<span class="badge badge-danger">必須</span></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Eメールアドレス"
                                                    value="{{old('email',$user->email) }}" name="email">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">SNSリンク</th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="SNSのリンク"
                                                    value="{{old('sns_link',$user->sns_link) }}" name="sns_link">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">KYOSAKU作品</th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="本サイトでの作品のリンク"
                                                    value="{{old( 'collaboration_link',$user->collaboration_link) }}" name="collaboration_link">
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card" style="margin: 0 35px">
                        <h5 class="text-center" style="font-weight: 20px">ジャンル<span
                                class="badge badge-danger">片方必須</span></h5>
                        <div class="form-group">
                            <div class="text-center" style="margin-right: 90px; margin-left: 90px">
                                <label>音楽</label><br>
                                @foreach ($genres_music as $genre)
                                <input type="checkbox" name="genre_id[]" value="{{ $genre->id }}"
                                    {{ in_array($genre->id,$my_genres_id) ? "checked" : "" }}>
                                <label>{{ $genre->genre_name }}</label>
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="text-center" style="margin-right: 55px; margin-left: 55px">
                                <label>イラスト</label><br>
                                @foreach ($genres_illustration as $genre)
                                <input type="checkbox" name="genre_id[]" value="{{ $genre->id }}"
                                    {{ in_array($genre->id,$my_genres_id) ? "checked" : "" }}>
                                <label>{{ $genre->genre_name }}</label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 10px; padding-right: 80px; padding-left: 80px">
                        <textarea class="form-control" placeholder="自己紹介" rows="5"
                            name="profile">{{ $user->profile }}</textarea>
                    </div>

                    <div class="btn-4 mb-4">
                    <button type="submit" class="btn btn-primary">作成する</button>
                    </div>
                </form>

                <form action="{{ route('users.destroy',Auth::id()) }}" method="POST">
                    {{ csrf_field('DELETE') }}
                    {{ method_field('DELETE') }}
                    <div class="btn-4 mb-3">
                    <input type="submit" value="退会する" class="btn btn-danger" onclick='return confirm("退会しますか？");'>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
