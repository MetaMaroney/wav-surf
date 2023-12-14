@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}Post: {{$post->title}}
@endsection

@section('middlediv')
    <div class="post">
        <div class="postitem" id="postcreator">
            <a href="{{ route('profiles.show', $post->user_id) }}">{{ $post->user->name }}</a>
            <div>
                @auth()
                <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                    @csrf
                    @method('delete')
                    <a class="mx-2" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                    <button id="deletebutton">X</button>                    
                </form>
                @endauth
            </div>
        </div>
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
            @livewire('comments', ['post' => $post], key($post->id))
    </div>
@endsection