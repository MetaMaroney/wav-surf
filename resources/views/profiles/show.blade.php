@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}Profile: {{$profile->username}}
@endsection

@section('middlediv')
    <div class="post" id="post-container">
        <div id="profile-name" >Username: {{$profile->username}}</div>
        <div id="profile" class="postitem">
            <div class="profile-bio-item" id="profile-item-1">
                <div style="color: #f3deff;">{{$profile->bio}} Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </div>
            </div>
        </div>
    </div>
    <div class="post" id="post-container">
        <h5 style="color: #f3deff;" class="mt-2">Posts:</h5>
        <div id="profile-post" class="postitem">
            @foreach($profile->user->posts as $post)

            <div id="profile-posts" class="profile-item">
            {{--sketchy shit--}}
            <div id="post-content-container">
                <div id="postcreator">  
                    <div id="post-view-delete">
                        {{--<a id="post-author" class="text-decoration-none me-3 mt-1" href="{{ route('posts.show', $post->id) }}">View</a>--}}
                        {{--@auth()
                        <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                            @csrf
                            @method('delete')
                            <button class="m-2 btn-sm" id="deletebutton">X</button>
                        </form>
                        @endauth--}}
                    </div>
                </div>
                <div id="posttop">                        
                    <div id="post-title">
                        <h4>Title: {{ $post->title }}</h4>
                    </div>
                </div>
                <div id="post-image-container">               
                    <img class="post-image" width="100%" src="{{ $post->getImage() }}" alt="">                    
                </div>
                <div class="postitem" id="postmiddle">
                    {{ $post->content }}
                </div>
                <div class="postitem" id="postbottom">
                    {{ $post->created_at }}
                </div>
            </div>
            {{--sketchy shit--}}
            </div>
            @endforeach
        </div>
    </div>

    <div class="post" id="post-container">
        <h5 style="color: #f3deff;" class="mt-2">{{ $profile->user->name }}'s Comments:</h5>
        <div id="profile-post" class="postitem">
            {{--sckety shit--}}
            <div id="profile-comments-container">
                @forelse ($profile->user->comments as $comment)
                    <div class="postitem" id="comment-container">
                        <div id="comment-name-edit">
                            <a class="text-decoration-none" href="{{ route('profiles.show', $comment->user_id)}}">
                                <div id="comment-author" class="fw-bold">
                                    {{ $comment->user->name }}
                                </div>
                            </a>
                            @auth()
                            <div id="comment-edit-delete">
                                <a id="comment-edit" class="me-4" href="{{ route('comments.edit', $comment->id)}}">Edit</a>
                                <form method="POST" action="{{ route('comments.destroy', $comment->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button id="deletebutton">X</button>
                                </form>
                            </div>
                            @endauth
                        </div>
                        <div style="color: #f3deff;">
                            {{ $comment->content }}
                        </div>
                    </div>
                @empty
                    <div style="color: #f3deff;">No Comments</div>
                @endforelse
            </div>
            {{-- sketchy shit--}}
        </div>
    </div>
@endsection