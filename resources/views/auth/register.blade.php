@extends('layouts.test')

@section('middlediv')
<div class="post" id="post-container">
    <div class="postitem" id="register-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <h5 style="color: #f3deff">Name:</h5>
                <input class="register-input" type="text" name="name">
            </div>
            <div>
                <h5 style="color: #f3deff">E-mail Address:</h5>
                <input class="register-input" type="email" name="email">
            </div>
            <div>
                <h5 style="color: #f3deff">Password:</h5>
                <input class="register-input" type="password" name="password">
            </div>
            <div>
                <h5 style="color: #f3deff">Re-enter Password:</h5>
                <input class="register-input" type="password" name="password_confirmation">
            </div>
            <div style="display: flex; flex-direction:column;">
                <input class="button" id="submit-button" style="align-self: end;" type="submit" value="Register">
            </div>
        </form>
    </div>
</div>
@endsection