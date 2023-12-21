@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}
@endsection

@section('middlediv')
    <div class="post" id="post-container">
        <div id="post-content-container">
            <div id="postcreator">
                <div>
                    <a id="post-author" class="fw-bold text-decoration-none"" href="{{ route('profiles.show', $comment->post->user_id) }}">{{ $comment->user->name }}</a>
                </div>
            </div>
            <div id="posttop">                        
                <div id="post-title">
                    <h4>Title: {{ $comment->post->title }}</h4>
                </div>
            </div>
            <div id="post-image-container">
                <img class="post-image" width="100%" src="{{ $comment->post->getImage() }}" alt="">
            </div>
            <div class="postitem" id="postmiddle">
                {{ $comment->post->content }}
            </div>
            <div class="postitem" id="postbottom">
                {{ $comment->post->created_at }}
            </div>
        </div>
        <h5 id="comment-title">Comment:</h5>
        <div class="postitem" id="comments-container">
                <form method="POST" action="{{ route('comments.update', $comment->id) }}">
                @csrf
                @method('put')
                <textarea name="content" id="content-text-area">{{ $comment->content }}</textarea>
                <div id="post-edit-bottom">
                    <button id="update-button" type="submit">Update</button>
                </div>
                @error('content')
                    <span>{{ $message }}</span>
                @enderror
                </form>
            </div>
    </div>
@endsection