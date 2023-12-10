@extends('layouts.test')

@section('title')
Library Index
@endsection

@section('middlediv')
    <div id="middledivitem">
        @foreach ($libraries as $library)
            <li><a href="{{  route('libraries.show', ['id' => $library->id])  }}">{{$library->id}}</a></li>
        @endforeach
    </div>
@endsection