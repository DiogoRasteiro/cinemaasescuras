@extends('layouts.app')

@section('title') Cartaz @endsection

@section('content')

<br>
<br>
<h1 id="hcartaz" class="text-center"> Em Cartaz</h1>
<br> <br>

@foreach ($films as $film)
@php
$i = 1;
$i = ($loop->index)%5;
@endphp

@if($loop->first)
<div class="row">
@endif

  <div class="col-md-2 mx-auto">
    <div class=" thumbnail">
      <div class="hovereffect">
      <img class="img-responsive" src='{{ $film->image }}'' style="width:230px; height: 350px;">
      <div class="overlay">
         <a class="info" href="{{ url('/film/'.$film->id) }}" style="color: white;">Saber mais</a>
      </div>
      <div class="caption">
        <br>
        <h5 style="color: black; text-decoration:underline; text-align:center"> {{$film->name}} </h5>
      </div>
    </div>
  </div>
  </div>
  @php
  $i = 1;
  $i = ($loop->index)%4;
  @endphp
  @if( $i === 0 and !$loop->first)
</div>
  <div class="row">
  @endif
@endforeach
  </div>
<br>
<br>

@endsection
