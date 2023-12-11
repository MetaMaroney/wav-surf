@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}Posts Index
@endsection

@section('middlediv')
            @foreach ($posts as $post)
            <div class="post">
                <li>{{ $post->created_at }}</li>
                <li>{{ $post->title }}</li>
                <li>{{ $post->content }}</li>
                <li>{{ $post->user->name }}</li>
            </div>
            @endforeach
@endsection

@section('rightdiv')
<div>
    <a href="{{ route('posts.create') }}">Create Post</a>
</div>
@endsection