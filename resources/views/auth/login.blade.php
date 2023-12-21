@extends('layouts.test')

@section('title')
    Login
@endsection

@section('middlediv')
    <div class="post" id="post-container">
        <div class="postitem" id="post-edit-middle">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <h5 style="color: #f3deff;">E-mail Address:</h5> 
                    <input class="login-input" id="email-input" type="email" name="email">
                </div>
                <div>
                    <h5 style="color: #f3deff;"> Password: <h5>
                    <input class="login-input" id="password-input" type="password" name="password">
                </div>
                <div style="display: flex; flex-direction:column;">
                    <input id="login-button" class="button" type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
@endsection

@section('rightdiv')
{{--
<div>
    <a style="font-size: x-large;" class="hyperlink-button" href="{{ route('register')}}">Register</a>
</div>
--}}
@endsection