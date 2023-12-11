@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}Posts Index
@endsection

@section('middlediv')
            @foreach ($posts as $post)
            <div class="post">
                <div class="postitem" id="postcreator">
                    {{ $post->user->name }}
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
            </div>
            @endforeach
@endsection

@section('rightdiv')
<div>
    <a href="{{ route('posts.create') }}">Create Post</a>
</div>
@endsection