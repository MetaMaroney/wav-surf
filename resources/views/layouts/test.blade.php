<!DOCTYPE html>

<html>
<head>
    <title>Wav Surf - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('dashboard.css')}}">
</head>

<body>
    <div id="container">
        <div class="bdiv" id="navcontainer">
            <div class="navitem" id="navdiv1">*Logo*</div>
            <div class="navitem" id="navdiv2">*Search Bar*</div>
            <div class="navitem" id="navdiv3">
                <a href="{{ route('register')}}">Register</a> *Profile*
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
            <div class="bodyitem" id="bodydiv2">
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