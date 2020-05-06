@extends('layouts.app')

@section('content')


<h1> {{$film->name}} </h1>

<img src="{{$film->image}}" alt="">

@endsection