@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}Posts Index
@endsection

@section('middlediv')
            @foreach ($posts as $post)
            <div class="post">
                <div id="post-content-container">
                    <div class="postitem" id="postcreator">
                        <div id="post-author">
                            <a class="fw-bold text-decoration-none" href="{{ route('profiles.show', $post->user_id) }}">{{ $post->user->name }}</a>
                        </div>    
                        <div id="post-view-delete">
                            <a class="me-3" href="{{ route('posts.show', $post->id) }}">View</a>
                            @auth()
                            <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                                @csrf
                                @method('delete')
                                <button id="deletebutton">X</button>
                            </form>
                            @endauth
                        </div>
                    </div>
                    <div class="postitem" id="posttop">                        
                        <div>
                            <b>Title: </b>{{ $post->title }}
                        </div>
                    </div>
                    <div class="postitem" id="postmiddle">
                        {{ $post->content }}
                    </div>
                    <div>
                        <img width="100%" src="{{ $post->getImage() }}" alt="">
                    </div>
                    <div class="postitem" id="postbottom">
                        {{ $post->created_at }}
                    </div>
                </div>
                <h4>Comments:</h4>
                <div id="comments-container">
                    @forelse ($post->comments as $comment)
                        <div class="postitem" id="comment-container">
                            <div id="comment-name-edit">
                                <a href="{{ route('profiles.show', $comment->user_id)}}">{{ $comment->user->name }}</a>
                                @auth()
                                <a href="{{ route('comments.edit', $comment->id)}}">Edit</a>
                                <form method="POST" action="{{ route('comments.destroy', $comment->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button id="deletebutton">X</button>
                                </form>
                                @endauth
                            </div>
                            <div>
                            {{ $comment->content }}
                            </div>
                        </div>
                    @empty
                        <div>No Comments</div>
                    @endforelse
                </div>
            </div>
            @endforeach
@endsection

@section('rightdiv')
@auth()
<div>
    <a href="{{ route('posts.create') }}">Create Post</a>
</div>
@endauth
@guest
<div>
    Login to create posts
</div>
@endguest
@endsection