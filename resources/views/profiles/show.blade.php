@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}Profile: {{$profile->username}}
@endsection

@section('middlediv')
    <div class="profile-container">
        <div class="profile-item" id="profile-item-1">
            <li>Username: {{$profile->username}}</li>
            <li>{{$profile->bio}}</li>
            <input type="file">
        </div>
    </div>
    <div>
        <h4>Posts</h4>
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
        <h4>Comments</h4>
        @foreach ($profile->user->comments as $comment)
            <div class="post">
                <div class="postitem" id="postmiddle">
                    {{ $comment->content }}
                </div>
                <div class="postitem" id="postbottom">
                    {{ $comment->created_at }}
                </div>
            </div>
        @endforeach
    </div>
        
@endsection