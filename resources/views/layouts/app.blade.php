<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Mini Tripadvisor</title>
</head>

<body>
    <header>
        @if(session()->has('userLogged'))
        <div class="add">
            <div class="plus">
                <a href="{{route('newPlace')}}"><img src="{{ asset('img/add.svg') }}" alt="+" id="+"></a>
            </div>
        </div>
        @endif
        <div class="top">
            @if(session()->has('userLogged'))
            <div class="connexion">
                <p>{{session('username')}}</p>
                <a href="{{route('logout')}}">Logout</a>
            </div>
            @else
            <div class="connexion">
                <a href="{{route('register')}}">Register or Sign-in</a>
                <!-- <a href="{{route('login')}}">Login</a> -->
            </div>
            @endif
        </div>
        <div class="middle">
            <a href="{{route('home')}}">
                <img src="{{ asset('img/logo.svg') }}" alt="logo" id="logo">
            </a>
        </div>
        <span class="color"></span>
    </header>
    <main class="main">
        @yield('content')
    </main>
    <footer>

    </footer>
</body>

</html>