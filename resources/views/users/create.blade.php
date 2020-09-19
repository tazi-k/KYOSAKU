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
                    <label>年齢</label><br>
                    <select>
                        @foreach ($ages as $age){{-- ○から○（決めてよし）一個ずつ取り出し --}}
                        <option value="{{ $age }}">{{ $age }}</option>
                        @endforeach

                    </select>
                    <label>歳</label>
                </div>
                <div class="form-group">
                    <label>お住まい</label><br>
                    <select name="prefecture_id">
                        @foreach ($prefectures as $prefecture)
                        <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>
                        @endforeach
                            <option selected="">選択する</option>  
                            <option value="1">北海道</option>
                            <option value="2">青森県</option>
                            <option value="3">岩手県</option>
                            <option value="4">宮城県</option>
                            <option value="5">秋田県</option>
                            <option value="6">山形県</option>
                            <option value="7">福島県</option>
                            <option value="8">茨城県</option>
                            <option value="9">栃木県</option>
                            <option value="10">群馬県</option>
                            <option value="11">埼玉県</option>
                            <option value="12">千葉県</option>
                            <option value="13">東京都</option>
                            <option value="14">神奈川県</option>
                            <option value="15">新潟県</option>
                            <option value="16">富山県</option>
                            <option value="17">石川県</option>
                            <option value="18">福井県</option>
                            <option value="19">山梨県</option>
                            <option value="20">長野県</option>
                            <option value="21">岐阜県</option>
                            <option value="22">静岡県</option>
                            <option value="23">愛知県</option>
                            <option value="24">三重県</option>
                            <option value="25">滋賀県</option>
                            <option value="26">京都府</option>
                            <option value="27">大阪府</option>
                            <option value="28">兵庫県</option>
                            <option value="29">奈良県</option>
                            <option value="30">和歌山県</option>
                            <option value="31">鳥取県</option>
                            <option value="32">島根県</option>
                            <option value="33">岡山県</option>
                            <option value="34">広島県</option>
                            <option value="35">山口県</option>
                            <option value="36">徳島県</option>
                            <option value="37">香川県</option>
                            <option value="38">愛媛県</option>
                            <option value="39">高知県</option>
                            <option value="40">福岡県</option>
                            <option value="41">佐賀県</option>
                            <option value="42">長崎県</option>
                            <option value="43">熊本県</option>
                            <option value="44">大分県</option>
                            <option value="45">宮崎県</option>
                            <option value="46">鹿児島県</option>
                            <option value="47">沖縄県</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>ジャンル：音楽</label><br>
                    <select name="genre_id">
                        @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endforeach
                        <option selected="">選択する</option>
                        <option value="1">J-pop</option>
                        <option value="2">Rock</option>
                        <option value="3">洋楽系</option>
                        <option value="4">Dubstep</option>
                        <option value="5">クラシック</option>
                        <option value="6">HIPHOP</option>
                        <option value="7">TRAP</option>
                        <option value="8">RAP</option>
                        <option value="9">EDM</option>
                        <option value="10">K-POP</option>
                        <option value="11">R&B</option>
                        <option value="12">レゲエ</option>
                        <option value="13">ジャズ</option>
                        <option value="14">アニメ</option>
                        
                    </select>
                </div>

                <div class="form-group">
                    <label>ジャンル：イラスト</label><br>
                    <select name="genre_id">
                        @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endforeach
                        <option selected="">選択する</option>
                        <option value="15">ノベル</option>
                        <option value="16">キャラクター</option>
                        <option value="17">似顔絵</option>
                        <option value="18">ファッション</option>
                        <option value="19">リアル</option>
                        <option value="20">コミック</option>
                        <option value="21">ポップ</option>
                        <option value="22">エッセイ</option>
                        <option value="23">ゆるかわ</option>
                        <option value="24">ペン画</option>
                        <option value="25">水彩</option>
                        <option value="26">サイン風</option>
                        <option value="27">モダン</option>
                        <option value="28">レトロ</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">作成する</button>
            </form>
        </div>
    </div>
</div>
@endsection
