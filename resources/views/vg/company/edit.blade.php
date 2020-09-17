@extends('layouts.master')

@section('title') Edit Company @stop

@section('content')
    <form method="POST" action="{{ route('companies.update', $company->id) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        @method('PUT')
        <div class="form-group">
            <label for="Name">Nombre</label>
            <input type="text" class="form-control" id="Name" name="name" value="{{ $company->name }}">
        </div>
        <div class="form-group">
            <label for="Description">Descripción</label>
            <input type="text" class="form-control" id="Description" name="description" value="{{ $company->description }}">
        </div>
        <div class="form-group">
            <label for="Website">Website</label>
            <input type="text" class="form-control" id="Website" name="website" value="{{ $company->website }}">
        </div>
        <div class="form-group">
            <label for="Image">Imagen</label>
            <img src="{{ asset('images/companies/'.$company->image) }}" class="rounded-circle" alt="" style="width: 40px">
            <input type="file" class="form-control" id="Image" name="image" value="{{ $company->image }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop
