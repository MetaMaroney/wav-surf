@extends('layouts.test')

@section('middlediv')
<div>
    <form method="POST" action="{{ route('profiles.store') }}">
        @csrf
        <p>Name: <input type="text" name="username"
            value="{{ old('username') }}"></p>
        <p>Bio: <input type="text" name="bio"
            value="{{ old('bio') }}"></p>
        <p>Date of birth: <input type="text" name="date_of_birth"
            value="{{ old('date_of_birth') }}"></p>
        <input type="submit" value="Submit">
        <a href="{{ route('profiles.index') }}">Cancel</a>
    </form>
</div>
    
@endsection