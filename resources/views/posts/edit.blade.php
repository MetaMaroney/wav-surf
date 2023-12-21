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
                <a id="post-author" class="text-decoration-none me-3 mt-1" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                @auth()
                <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                    @csrf
                    @method('delete')
                    
                    <button class="m-2 btn-sm" id="deletebutton">X</button>                    
                </form>
                @endauth
            </div>
        </div>
        <form method="POST" action="{{ route('posts.update', $post->id) }}">
            @csrf
            @method('put')
            <div id="posttop">                        
                <div id="post-title">
                    <h4>Title:</h4>
                    <textarea name="title" id="title-text-area" >{{ $post->title }}</textarea>
                </div>
            </div>
            <div id="post-image-container">               
                <img class="post-image" width="100%" src="{{ $post->getImage() }}" alt="">                    
            </div>
            <div class="postitem" id="post-edit-middle">
                    <textarea name="content" id="content-text-area">{{ $post->content }}</textarea>
                    @error('content')
                        <span>{{ $message }}</span>
                    @enderror
            </div>
            <div class="postitem" id="postbottom">
                {{ $post->created_at }}
            </div>
            <div id="post-edit-bottom">
                <button id="update-button" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection