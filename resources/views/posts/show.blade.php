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
                    <button id="deletebutton">X</button>
                </form>
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