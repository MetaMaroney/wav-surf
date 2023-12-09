@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}Profile: {{$profile->username}}
@endsection

@section('middlediv')
    <div id="middledivitem">
        <ul>Username: {{$profile->username}}</ul>
        <ul>{{$profile->bio}}</ul>
    </div>
@endsection