@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}Posts Index
@endsection

@section('middlediv')
            @foreach ($posts as $post)
            <div class="post">
                <div class="postitem" id="postcreator">
                    <a href="{{ route('profiles.show', $post->user_id) }}">{{ $post->user->name }}</a>
                    
                    <div>
                        <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                            @csrf
                            @method('delete')
                            <button id="deletebutton">X</button>
                        </form>
                        <a href="{{ route('posts.show', $post->id) }}">View</a>
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
                <div class="postitem" id="postcomment">
                    
                </div>
            </div>
            @endforeach
@endsection

@section('rightdiv')
<div>
    <a href="{{ route('posts.create') }}">Create Post</a>
</div>
@endsection