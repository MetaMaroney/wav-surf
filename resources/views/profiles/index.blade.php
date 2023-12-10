@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}Profile Index
@endsection

@section('middlediv')
   <div id="middledivitem">
   @foreach ($profiles as $profile)
      <li><a href="{{  route('profiles.show', ['id' => $profile->id])  }}">{{$profile->id}}</a></li>
   @endforeach
   </div>
@endsection

