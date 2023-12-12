@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}Profile: {{$profile->username}}
@endsection

@section('middlediv')
    <div class="post">
        <div class="postitem" id="profileitem">
                <li>Username: {{$profile->username}}</li>
                <li>{{$profile->bio}}</li>
                <li>{{ $profile->user->posts }}</li>
        </div>
    </div>
@endsection