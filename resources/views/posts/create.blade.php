@extends('layouts.test')

@section('middlediv')
<div>
    <form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <p>Title: <input type="text" name="title"></p>
    <p>Message: <input type="text" name="content"></p>
    <input type="submit" value="post">
    <a href="{{ route('posts.index') }}">Cancel</a>
    </form>
</div>
@endsection