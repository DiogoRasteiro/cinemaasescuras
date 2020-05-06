@extends('layouts.app')

@section('content')

<div class="panel-body">
    @include('common.errors')

    <!-- New Film Form -->
    <form action="/film" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Film Name -->
        <div class="form-group">
            <label for="film" class="col-sm-3 control-label">Film</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="film-name" class="form-control">
            </div>
        </div>

        <!-- Add Film Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add Film
                </button>
            </div>
        </div>
    </form>
</div>

@endsection