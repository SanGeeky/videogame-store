@extends('layouts.master')

@section('title') Add Genre @stop

@section('content')
    <form method="POST" action="{{ route('genres.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" id="Name" name="name">
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <input type="text" class="form-control" id="Description" name="description">
        </div>
        <div class="form-group">
            <label for="Image">Image</label>
            <input type="file" class="form-control" id="Image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Mandalo</button>
    </form>
@stop
