@extends('layouts.test')

@section('middlediv')
    <form method="POST" action="">
        @csrf
        <div>
            Name: <input type="text" name="name">
        </div>
        <div>
            E-mail Address: <input type="email" name="email">
        </div>
        <div>
            Password: <input type="password" name="password">
        </div>
        <div>
            Re-enter Password: <input type="password" name="password_confirmation">
        </div>
        <div>
            <input type="submit" value="Register">
        </div>
    </form>
@endsection