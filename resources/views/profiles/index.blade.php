@extends('layouts.test')

@section('title')
{{-- "Wav Surf - " --}}Profile Index
@endsection

@section('middlediv')
   <div id="middledivitem">
   @foreach ($profiles as $profile)
      <ul>{{$profile->id}}</ul>
   @endforeach
   <ul>more</ul>
   <ul>more</ul>
   <ul>more</ul>
   <ul>more</ul>
   <ul>more</ul>
   <ul>more</ul>
   <ul>more</ul>
   <ul>more</ul>
   <ul>more</ul>
   <ul>more</ul>
   <ul>more</ul>
   <ul>more</ul>
   <ul>more</ul>
   </div>
@endsection

