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
            @foreach($room->chats as $chat)
            <div class="card">
                <div class="card-body">
                    <img src="{{ $chat->user->image_path }}" alt="" width="40" height="40">
                    <p>{{ $chat->user->name }}</p>
                    <p>{{ $chat->message }}</p>
                </div>
            </div>
            @endforeach
            <form action="{{ route('chats.store',$room) }}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label></label>
                    <textarea class="form-control" placeholder="内容" rows="5" name="body"></textarea>
                </div>
                <input type="hidden" name="matching" value="{{ $matching->id }}">
                <button type="submit" class="btn btn-primary">送信する</button>
            </form>
        </div>
    </div>
</div>
@endsection
