@extends('layouts.app')
@section('content')
<div class="list">
    @if(session('message'))
    <div class="msg" role="alert">
        <p>{{session('message')}}</p>
    </div>
    @endif
    @foreach ($places as $place)
    <div class="place">
        <a href="{{route('place',$place->id)}}">
            <span>{{$place->name}}
            </span>
            </a>
    </div>
    @endforeach
</div>

@endsection