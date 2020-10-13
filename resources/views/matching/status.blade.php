@extends('layouts.app')

@section('content')
<style>
    .pagination {
        justify-content: center;
    }

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="text-center">
                <div class="box9 center">
                    <h3 class="card-header" style="color: black">
                        共作状況
                    </h3>
                </div>

                <div class="container">
                    <div class="row justify-content-center ">
                        @foreach ($statusToMatching as $matchingUser)
                        @if($matchingUser->from_user->id !== Auth::id())
                        <div class="card col-md-3 mx-4 my-3 pr-0 pl-0">
                            <h4 class="card-header">共作中</h4>
                            <h5 class="card-title mt-3">{{ $matchingUser->from_user->name }}</h5>
                            <div>
                                <img src="{{ $matchingUser->from_user->image_path }}" width="190px" height="150px"
                                    alt="画像" class="index-img">
                            </div>
                            <form action="{{ route('rooms.store',$matchingUser->id) }}" method="POST">
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-success mt-3 mb-3">トークへ</button>
                            </form>
                        </div>
                        @else
                        <div class="card col-md-3 mx-4 my-3 pr-0 pl-0">
                            <h4 class="card-header">共作中</h4>
                            <h5 class="card-title mt-3">{{ $matchingUser->to_user->name }}</h5>
                            <div>
                                <img src="{{ $matchingUser->to_user->image_path }}" width="190px" height="150px"
                                    alt="画像" class="index-img">
                            </div>
                            <form action="{{ route('rooms.store',$matchingUser->id) }}" method="POST">
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-success mt-3 mb-3">トークへ</button>
                            </form>
                        </div>
                        @endif
                        @endforeach
                        @foreach ($statusToMe as $getUser)
                        <div class="card col-md-3 mx-4 my-3 pr-0 pl-0">
                            <h4 class="card-header">共作依頼</h4>
                            <h5 class="card-title mt-3">{{ $getUser->from_user->name }}</h5>
                            <div>
                                <img src="{{ $getUser->from_user->image_path }}" width="190px" height="150px" alt="画像"
                                    class="index-img">
                            </div>
                            <h6 class="mt-2">{{ $getUser->created_at }}</h6>
                            {{-- <a type="button" href="{{ route('matching.show',[$user->id,$getUser->id]) }}"> --}}
                            <form action="{{ route('matching.show',[$user->id,$getUser->id]) }}" method="GET">
                                {{csrf_field()}}
                                <button type="submit" href="{{ route('matching.show',[$user->id,$getUser->id]) }}" class="btn-2">
                                あなたへのメッセージ
                                </button>
                            {{-- </a> --}}
                            </form>
                            <form action="{{ route('matching.update',[$user->id,$getUser->id]) }}" method="POST">
                                {{csrf_field()}}
                                {{ method_field('PATCH') }}
                                <input type="hidden" name="status" value="2">
                                <button type="submit" class="btn-box btn-success">共作る</button>
                            </form>


                            {{-- <a type="button" href="{{ route('matching.update',[$user->id,$getUser->id]) }}" class="btn-box">共作る</a> --}}


                            <form action="{{ route('matching.update',[$user->id,$getUser->id]) }}" method="POST">
                                {{csrf_field()}}
                                {{ method_field('PATCH') }}
                                <input type="hidden" name="status" value="3">
                                <button type="submit" class="btn-1">ごめんなさい</button>
                            </form>
                        </div>
                        @endforeach
                        @foreach ($statusToAsk as $AskUser)
                        <div class="card col-md-3 mx-4 my-3 pr-0 pl-0">
                            <h4 class="card-header">応答待ち</h4>
                            <h5 class="card-title mt-3">{{ $AskUser->to_user->name }}</h5>
                            <div>
                                <img src="{{ $AskUser->to_user->image_path }}" width="190px" height="150px" alt="画像"
                                    class="index-img">
                            </div>
                            <h6 class="mt-4">{{ $AskUser->created_at }}</h6>
                        </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        
</div>
@endsection
