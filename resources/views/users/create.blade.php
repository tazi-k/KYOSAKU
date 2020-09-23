@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
        <form action="{{ route('matching.store',$id)}}" method="POST">
          {{csrf_field()}}
          {{-- {{ method_field('PATCH') }} --}}
              <div class="form-group">
                  <h4>確認</h4>
                  <h5>共作りたい！を送りますか？</h5>
              </div>
              <div class="form-group">
                  <label></label>
                  <textarea class="form-control" placeholder="自分の想いなどを伝えましょう！" rows="5" name="message"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">送る</button>
          </form>
      </div>
  </div>
</div>

@endsection