@extends('layouts.master')

@section('title') Personajes @stop
 
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if(Auth::user()->isAdmin())
                        <button type="button" class="btn btn-primary add-button" data-toggle="modal" data-target="#exampleModal">
                        Añadir
                    @endif
                    </button>

                    <table class="table table-hover">
                        <thead>
                            <tr>
								<th scope="col">Nombre</th>
								<th scope="col">Género</th>
								<th scope="col">Nombre real</th>
								<th scope="col">Alias</th>
								<th scope="col">Descripción</th>
								<th scope="col">Nacimiento</th>
								<th scope="col">Juego</th>
								<th scope="col">Imagen</th>
                                @if(Auth::user()->role==User::ROLE_ADMIN)
                                	<th scope="col">Editar</th>
                                	<th scope="col">Eliminar</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($characters as $chr)
                            <tr>
                                <td scope="col">{{$chr->name}}</th>
                                <td scope="col">{{$chr->gender}}</th>
                                <td scope="col">{{$chr->real_name}}</th>
                                <td scope="col">{{$chr->aliases}}</th>
                                <td scope="col">{{$chr->description}}</th>
                                <td scope="col">{{$chr->birthday}}</th>
                                <td scope="col">{{$chr->game->name}}</th>

                                <td><img style="width: 80px;" src="{{ asset('images/characters/'.$chr->image) }}" class="rounded-circle" alt=""></td>

                                @if(Auth::user()->isAdmin())
                                <td><a href="{{ route('characters.edit', $chr->id) }}">Edit</a></td>
                                <td>
                                    <form method="POST" action="{{ route('characters.destroy', $chr->id) }}">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit"
                                        onclick="return confirm('¿Esta seguro de eliminar este registro?')" class="btn btn-sm">
                                        <i class="fa fa-trash"></i>

                                        
                                        </button>
                                    </form>
                                </td>
                                @endif

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop