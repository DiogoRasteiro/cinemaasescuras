@extends('layouts.app')

@section('content')

@foreach ($films as $film)
    <p>
    <a href="{{ url('/film/'.$film->id. '/' )}}">    {{$film->name}} ( {{$film->genre}} ) </a>
    </p>

@endforeach

@endsection