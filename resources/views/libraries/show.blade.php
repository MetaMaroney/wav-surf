@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}Library: {{$library->name}}
@endsection

@section('middlediv')
    <div id="middledivitem">
        <ul>Name: {{$library->name}}</ul>
        <ul>{{$library->total_beats}}</ul>
    </div>
@endsection