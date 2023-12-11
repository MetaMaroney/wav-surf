<!DOCTYPE html>

<html>
<head>
    <title>Wav Surf - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('dashboard.css')}}">
    <!-- Add these lines to the head section of your layout file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div id="container">
        <div class="bdiv" id="navcontainer">
            <div class="navitem" id="navdiv1">*Logo*</div>
            <div class="navitem" id="navdiv2">*Search Bar*</div>
            <div class="navitem" id="navdiv3">
                @guest
                <a href="{{ route('register') }}">register</a>
                @endguest
                @auth()
                <a href="">{{ Auth::user()->name }}</a>
                <a href="{{ route('logout') }}"> logout</a>
                @endauth
                @guest
                <a href="{{ route('login') }}">login</a>
                @endguest
            </div>
        </div>
        <div class="bdiv" id="bodycontainer">
            <div class="bodyitem" id="bodydiv1">
                @yield('leftdiv')
                <ul>
                    <li>Library</li>
                    <li>Explore</li>
                </ul>
            </div>
            <div class="bodyitem" id="bodymiddlediv">
                <div class="post" id="sticky">
                    <li>Some Text</li>
                </div>
                @yield('middlediv')
            </div>
            <div class="bodyitem" id="bodydiv3">
                @if (session('message'))
                    <div>
                        Message:
                        <p><b>{{ session('message') }}</b></p>
                    </div>
                @endif
                @if ($errors->any())
                    <div>
                        Errors:
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @yield('rightdiv')
            </div>
        </div>
    </div>
</body>