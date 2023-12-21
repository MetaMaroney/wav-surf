<!DOCTYPE html>

<html>
<head>
    <title>Wav Surf - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('dashboard.css')}}">
    <!-- Add these lines to the head section of your layout file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @livewireStyles
</head>

<body>
    <div id="container">
        <div class="bdiv" id="navcontainer">
            <div class="navitem" id="navdiv1">
                <img width="90" class="mb-3" src="{{ url('storage/wavesurf/wav-surf-logo.png') }}" alt="">
            </div>
            <div class="navitem" id="navdiv3">
                @guest
                <a class="hyperlink-button" href="{{ route('register') }}">register</a>
                @endguest
                @auth()
                <a id="profile-name" href="{{ route('profiles.show', Auth::user()->id) }}">{{ Auth::user()->name }}</a>
                <a id="logout" href="{{ route('logout') }}">logout</a>
                @endauth
                @guest
                <a id="login" class="hyperlink-button" href="{{ route('login') }}">login</a>
                @endguest
            </div>
        </div>
        <div class="bdiv" id="bodycontainer">
            <div class="bodyitem" id="bodydiv1">
                @yield('leftdiv')
                <dvi>
                    <a id="explore-body" href="{{ route('posts.index') }}">Explore</a>
                </dvi>
            </div>
            <div class="bodyitem" id="bodymiddlediv">
                <div id="sticky">
                    <a id="explore" href="{{ route('posts.index') }}">Explore</a>
                    @yield('sticky')
                </div>
                @yield('middlediv')
            </div>
            <div class="bodyitem" id="bodydiv3">
                <div>
                    @yield('rightdiv')
                </div>
                @if (session('message'))
                    <div class="error-message">
                        Message:
                        {{ session('message') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="error-message">
                        Errors:
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
    @livewireScripts
</body>