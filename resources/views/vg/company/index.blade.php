@extends('layouts.master')

@section('title') Companies @stop

@section('content')
    <div class="container">

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
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Website</th>
                                    <th scope="col">Image</th>
                                    @if(Auth::user()->role==User::ROLE_ADMIN)
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($companies as $company)
                                    <tr>
                                        <td scope="row">{{$company->name}}</td>
                                        <td>{{ $company->description }}</td>
                                        <td scope="row"><a href="https://{{$company->website}}" target="_blank">{{$company->website}}</a>     </td>
                                        <td>
                                            @if(strstr( $company->image, 'http' ) == true )
                                                <img style="width: 80px;" src="{{$company->image}}"  class="rounded-circle" alt="">
                                            @else
                                                <img style="width: 80px;" src="{{ asset('images/companies/'.$company->image) }}" class="rounded-circle" alt="">
                                            @endif
                                        </td>

                                        @if(Auth::user()->isAdmin())
                                            <td><a href="{{ route('companies.edit', $company->id) }}">Edit</a></td>
                                            <td>
                                                <form method="POST" action="{{ route('companies.destroy', $company->id) }}">
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
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar género</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('companies.store') }}" enctype="multipart/form-data">
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
                            <label for="Website">Website</label>
                            <input type="text" class="form-control" id="Website" name="website">
                        </div>
                        <div class="form-group">
                            <label for="Image">Image</label>
                            <input type="file" class="form-control" id="Image" name="image">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Mandalo</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
