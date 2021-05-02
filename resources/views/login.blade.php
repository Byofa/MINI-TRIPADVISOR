@extends('layouts.app')
@section('content')
<div class="login">
    <form action="{{route('auth')}}" method="Post">
        @csrf
        <div>
            <input type="text" id="username" name="username" placeholder="Username" required minlength="4" maxlength="16" autocomplete="username" autofocus>
        </div>
        <div>
            <input type="password" id="password" name="password" placeholder="Password" required minlength="8" maxlength="32">
            @if(session('message'))
            <div class="msg" role="alert">
                <p>{{session('message')}}</p>
            </div>
            @endif
        </div>
        <div>
            <input type="submit" value="Login">
        </div>
    </form>
</div>
@endsection