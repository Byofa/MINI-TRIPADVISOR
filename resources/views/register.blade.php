@extends('layouts.app')
@section('content')
<div class="registerOrConnect">
    <div class="register">
        <form action="{{route('createUser')}}" method="Post">
            @csrf
            <div class="input">
                <p class="underline">Register</p>
                
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required minlength="4" maxlength="16" autocomplete="username" autofocus>
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required minlength="8" maxlength="32">
                
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" Confirm Password" required minlength="8" maxlength="32" autocomplete="new-password">

                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required maxlength="255" autocomplete="email">
               
                @error('email')
                <span class="msg" role="alert">
                    <strong>{{ $errors }}</strong>
                </span>
                @enderror
                
                @if(session('message'))
                <div class="msg" role="alert">
                    <p>{{session('message')}}</p>
                </div>
                @endif
                
                <input type="submit" value="Register">

            </div>
        </form>
    </div>
    <div class="or">
        <p>or</p>
    </div>
    <div class="login">
        <form action="{{route('auth')}}" method="Post">
            @csrf
            <div class="input">
                <p class="underline">Login</p>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required minlength="4" maxlength="16" autocomplete="username" autofocus>
               
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required minlength="8" maxlength="32">
               
                @if(session('message'))
                <div class="msg" role="alert">
                    <p>{{session('message')}}</p>
                </div>
                @endif
               
                <input type="submit" value="Sign-in">

            </div>
        </form>
    </div>
</div>
@endsection