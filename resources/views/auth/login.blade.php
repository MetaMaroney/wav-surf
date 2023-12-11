@extends('layouts.test')

@section('middlediv')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <a href="{{ route('register')}}">Register</a>
        </div>
        <div>
            E-mail Address: <input type="email" name="email">
        </div>
        <div>
            Password: <input type="password" name="password">
        </div>
        <div>
            <input type="submit" value="Login">
        </div>
    </form>
@endsection