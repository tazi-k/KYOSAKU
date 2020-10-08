@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($room->chats as $chat)
            <div class="card">
                <div class="card-body">
                    <p>{{ $chat->user->name }}</p>
                    <p>{{ $chat->message }}</p>
                </div>
            </div>
            @endforeach
            <form action="{{ route('chats.store',$room) }}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label>内容</label>
                    <textarea class="form-control" placeholder="内容" rows="5" name="body"></textarea>
                </div>
                <input type="hidden" name="matching" value="{{ $matching->id }}">
                <button type="submit" class="btn btn-primary">送信する</button>
            </form>
        </div>
    </div>
</div>
@endsection
