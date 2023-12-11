@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}Posts Index
@endsection

@section('middlediv')
    <div id="middledivitem">
        <ul>
            @foreach ($posts as $post)
            <div class="post">
                <li>{{ $post->title }}</li>
                <li>{{ $post->content }}</li>
            </div>
            @endforeach
        </ul>
    </div>
@endsection

@section('rightdiv')
<div>
    <a href="{{ route('posts.create') }}">Create Post</a>
</div>
@endsection