@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}Post: {{$post->title}}
@endsection

@section('middlediv')
    <div class="post" id="post-container">
        <div id="post-content-creator">
            <div id="postcreator">
                <div>
                    <a id="post-author" class="fw-bold text-decoration-none" href="{{ route('profiles.show', $post->user_id) }}">{{ $post->user->name }}</a>
                </div>
                <div id="post-view-delete">
                    @auth()
                    <a id="post-author" class="text-decoration-none me-3 mt-1" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                    <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                        @csrf
                        @method('delete')
                        
                        <button class="m-2 btn-sm" id="deletebutton">X</button>                    
                    </form>
                    @endauth
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
        <h5 id="comment-title">Post a Comment:</h5>
        @livewire('comments', ['post' => $post], key($post->id))
    </div>
@endsection