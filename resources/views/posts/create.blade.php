@extends('layouts.test')

@section('middlediv')
<div class="post" id="post-create-container">
    <div id="create-container">
        <div>
            <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf
                <h5 class="text-white">Title: </h5>
                <input type="text" name="title" id="title-text-area" placeholder="Something captivating!">
                <textarea name="content" id="content-text-area" placeholder="Describe your post here!"></textarea>
                <input class="form-control" name="image" id="image-upload" type="file" >
                <div id="cancel-post">
                    <a id="post-create-cancel" href="{{ route('posts.index') }}">Cancel</a>
                    <input id="post-button" type="submit" value="post">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection