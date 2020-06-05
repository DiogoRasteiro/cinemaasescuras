@extends('layouts.app')

@section('content')

<div class="panel-body">
    @include('common.errors')
    <a href="{{url('/createfilm')}}" role="button" type="button" class="btn btn-light">Add Film to Database</a>
</div>

@endsection