<!DOCTYPE html>

<html>
<head>
    <title>Wav Surf</title>
    <link rel="stylesheet" href="{{asset('main.css')}}">
</head>

<body>


<nav class="navbar">
    <ul>
        <li><a href="">Logo</a></li>
        <li><a href="">Link</a></li>
        <li><a href="">Profile</a></li>
    </ul>
</nav>



<div class="container">
    <div class="div" id="div1">
        <div>
            @yield('leftdiv')
        </div>
    </div>
    <div class="div" id="div2">
        @yield('middlediv')
    </div>
    <div class="div" id="div3">
        @yield('rightdiv')
    </div>
</div>   
</body>


</html>