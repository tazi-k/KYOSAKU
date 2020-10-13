@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <form action="{{ route('matching.store',$id)}}" method="POST">
                {{csrf_field()}}
                <div class="form-group mt-4 text-center">
                    <h4>確認</h4>
                    <h5>共作りたい！を送りますか？</h5>
                </div>
                <div class="form-group " style="width: 600px; margin: auto;">
                    <textarea class="form-control" placeholder="自分の想いなどを伝えましょう！" rows="5" name="message"></textarea>
                </div>
                <div class="text-center">
                <input type="hidden" name="toUser_id" value="{{ $toUser }}">
                <button type="submit" class="btn btn-primary mt-5 mb-4">送る</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
