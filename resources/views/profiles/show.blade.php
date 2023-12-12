@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}Profile: {{$profile->username}}
@endsection

@section('middlediv')
    <div class="profile-container">
        <div class="profile-item" id="profile-item-1">
            <li>Username: {{$profile->username}}</li>
            <li>{{$profile->bio}}</li>
        </div>
    </div>
    <div>
        @foreach ($profile->user->posts as $post)
            <div class="post">
                <div class="postitem" id="posttop">                        
                    <div>
                        {{ $post->title }}
                    </div>
                </div>
                <div class="postitem" id="postmiddle">
                    {{ $post->content }}
                </div>
                <div class="postitem" id="postbottom">
                    {{ $post->created_at }}
                </div>
            </div>
        @endforeach
    </div>
        
@endsection