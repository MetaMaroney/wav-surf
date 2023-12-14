@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}Post: {{$post->title}}
@endsection

@section('middlediv')
    <div class="post">
        <div class="postitem" id="postcreator">
            <a href="{{ route('profiles.show', $post->user_id) }}">{{ $post->user->name }}</a>
            
            <div>
                <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                    @csrf
                    @method('delete')
                    <a class="mx-2" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                    <button id="deletebutton">X</button>                    
                </form>
            </div>
        </div>
            <div>
                <form method="POST" action="{{ route('posts.update', $post->id) }}">
                @csrf
                @method('put')
                <textarea name="title" id="title" cols="30" rows="10">{{ $post->title }}</textarea>
                <textarea name="content" id="content" cols="30" rows="10">{{ $post->content }}</textarea>
                <button type="submit">Update</button>
                @error('content')
                    <span>{{ $message }}</span>
                @enderror
                </form>
            </div>
    </div>
@endsection