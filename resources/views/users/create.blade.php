@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('users.store') }}" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label>SNSリンク</label>
                    <input type="text" class="form-control" placeholder="SNSのリンクを記載して下さい" name="title">
                </div>
                <div class="form-group">
                    <label>自己紹介文</label>
                    <textarea class="form-control" placeholder="自己紹介文を記載してください" rows="5" name="body"></textarea>
                </div>


                <div class="form-group">
                    <label>過去作品リンク</label>
                    <input type="text" class="form-control" placeholder="過去作品のリンクを記載してください" name="">
                </div>
                <div class="form-group">
                    <label>KYOSAKU作品リンク</label>
                    <input type="text" class="form-control" placeholder="本サイトにて完成したコラボ作品を記載してください">
                </div>
                <div class="form-group">
                    <label>年齢</label>
                    <select>
                        @foreach ($ages as $age)
                        <option value="{{ $age }}">{{ $age }}</option>
                        @endforeach
                        
                    </select>
                    <label>歳</label>
                </div>
                <div class="form-group">
                    <label>お住まい</label>
                    <select class="form-control" id="formControlSelect1"　name="prefecture_id">
                                <option selected="">選択する</option>  
                                    
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">作成する</button>
            </form>
        </div>
    </div>
</div>
@endsection