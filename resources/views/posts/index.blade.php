@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}Posts Index
@endsection

@section('middlediv')
<div id="middledivitem">
    @foreach ($posts as $post)
    {{ $post }}
    @endforeach
</div>
@endsection