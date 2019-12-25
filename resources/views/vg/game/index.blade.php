@extends('layouts.master')

@section('title') Games @stop

@section('content')
    <select name="genre_id" class="form-control" id="select2">
        @foreach($genres as $genre)
            <option value="{{ $genre->id }}"> {{ $genre->name }} </option>
        @endforeach
    </select>
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
                            @foreach($games as $game)
                                <tr>
                                    <td scope="row">{{$game->name}}</td>
                                    <td scope="row">{{$game->Genre->name}}</td>
                                    <td>{{ $game->description }}</td>
                                    {{--<td><img src="{{ asset('images/games/'.$game->image) }}" class="rounded-circle" alt=""></td>
                                    --}}
                                    <td><a href="{{ route("games.edit", $game->id) }}">Edit</a></td>
                                    <td>
                                        <form method="POST" action="{{ route("games.destroy", $game->id) }}">
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
                    <form method="POST" action="{{ route('games.store') }}" enctype="multipart/form-data">
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
                            <label for="Description">Select Genre</label>
                            <select name="genre_id" class="form-control" id="select2">
                                @foreach($genres as $genre)
                                    <option value="{{ $genre->id }}"> {{ $genre->name }} </option>
                                @endforeach
                            </select>
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
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous">

</script>
<script !src="">
    $(document).ready(function() {
        $('#select2').select2();
    })
</script>
