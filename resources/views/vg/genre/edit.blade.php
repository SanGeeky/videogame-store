@extends('layouts.master')

@section('title') Edit Genre @stop

@section('content')
    <form method="POST" action="{{ route('genres.update', $genre->id) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        @method('PUT')
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" id="Name" name="name" value="{{ $genre->name }}">
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <input type="text" class="form-control" id="Description" name="description" value="{{ $genre->description }}">
        </div>
        <div class="form-group">
            <label for="Image">Image</label>
            <img src="{{ asset('images/genres/'.$genre->image) }}" class="rounded-circle" alt="" style="width: 40px">
            <input type="file" class="form-control" id="Image" name="image" value="{{ $genre->image }}">
        </div>
        <button type="submit" class="btn btn-primary">Mandalo</button>
    </form>
@stop
