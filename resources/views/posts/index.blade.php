@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}Posts Index
@endsection

@section('sticky')
@auth()
    <a id="create" href="{{ route('posts.create') }}">Create Post</a>
@endauth
@endsection

@section('middlediv')
@livewire('posts', ['posts' => $posts])
@endsection

@section('rightdiv')
@auth()
    <a id="create-body" href="{{ route('posts.create') }}">Create Post</a>
@endauth
@guest
<div style="color: #f3deff">
    Login to create posts
</div>
@endguest
@endsection