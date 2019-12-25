@extends('layouts.master')

@section('title') Add Game @stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right">
                            Añadir
                        </button>

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Images</th>
                                <th scope="col">Edtar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($genres as $genre)
                                <tr>
                                    <td scope="row">{{$genre->name}}</td>
                                    <td>{{ $genre->description }}</td>
                                    {{--<td><img src="{{ asset('images/genres/'.$genre->image) }}" class="rounded-circle" alt=""></td>
                                    --}}
                                    <td><a href="{{ route("genres.edit", $genre->id) }}">Edit</a></td>
                                    <td>
                                        <form method="POST" action="{{ route("genres.destroy", $genre->id) }}">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit"
                                                    onclick="return confirm('¿Esta seguro de eliminar este registro?')" class="btn btn-sm">
                                                <i class="fa fa-trash"></i>

                                                Destroy
                                            </button></td>
                                    </form>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@stop
