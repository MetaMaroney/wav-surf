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
            <div class="navitem" id="navdiv3">*Profile*</div>
        </div>
        <div class="bdiv" id="bodycontainer">
            <div class="bodyitem" id="bodydiv1">@yield('leftdiv')</div>
            <div class="bodyitem" id="bodydiv2">@yield('middlediv')</div>
            <div class="bodyitem" id="bodydiv3">@yield('rightdiv')</div>
        </div>
    </div>
</body>