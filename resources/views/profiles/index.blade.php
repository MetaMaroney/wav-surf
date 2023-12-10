@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}Profile Index
@endsection

@section('middlediv')
   <div id="middledivitem">
      <ul>
         @foreach ($profiles as $profile)
            <li><a href="{{  route('profiles.show', ['id' => $profile->id])  }}">{{$profile->id}}</a></li>
         @endforeach
      </ul>
      <a href="{{ route('profiles.create') }}">Create Profile</a>
   </div>
@endsection

