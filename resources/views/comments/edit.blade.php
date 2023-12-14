@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}
@endsection

@section('middlediv')
    <div class="post">
        <div class="postitem" id="postcreator">
            <a href="{{ route('profiles.show', $comment->post->user_id) }}">{{ $comment->user->name }}</a>
            <div class="postitem" id="posttop">                        
                <div>
                    Title: {{ $comment->post->title }}
                </div>
            </div>
            <div class="postitem" id="postmiddle">
                {{ $comment->post->content }}
            </div>
            <div class="postitem" id="postbottom">
                {{ $comment->post->created_at }}
            </div>
        </div>
            <div>
                <form method="POST" action="{{ route('comments.update', $comment->id) }}">
                @csrf
                @method('put')
                <textarea name="content" id="content" cols="30" rows="10">{{ $comment->content }}</textarea>
                <button type="submit">Update</button>
                @error('content')
                    <span>{{ $message }}</span>
                @enderror
                </form>
            </div>
    </div>
@endsection