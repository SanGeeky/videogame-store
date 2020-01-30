@extends('layouts.master')

@section('title') Platforms @stop

@section('content')
    <div class="container">
        <div class="row border-bottom" style="margin-bottom: 20px;">
            @if(Auth::user()->isAdmin())
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary add-button" data-toggle="modal" data-target="#exampleModal">Añadir</button>
                </div>
            @endif

        </div>

        <div class="row">
            @foreach($platforms as $platform)
                <div class="col-xl-4 col-md-6 col-md-4">

                    <div class="card card-figure">
                        <figure class="figure">
                            <div class="figure-img">

                                <div class="small_img_container">
                                    @if(strstr( $platform->image, 'http' ) == true )
                                        <img class="img-fluid small_image" src="{{$platform->image}}">
                                    @else
                                        <img class="img-fluid small_image" src="{{ asset('images/platforms/'.$platform->image) }}">
                                    @endif
                                </div>


                                <div class="figure-tools">
                                    <a href="#" class="tile tile-circle tile-sm mr-auto">
                                        <span class="oi-data-transfer-download"></span></a>
                                    <span class="badge badge-danger">{{$platform->Company->name}}</span>
                                </div>
                                <div class="figure-action">
                                    <a href="{{ route('platforms.show', $platform->id) }}" class="btn btn-block btn-sm btn-primary">Detalles</a>
                                </div>
                            </div>

                            <div class="card-body">
                                <h3 class="card-title">{{$platform->name}}</h3>
                                <p class="card-text">{{$platform->description}}.</p>
                            </div>

                        </figure>
                    </div>
                </div>

            @endforeach
        </div>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 90vw;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Añadir Juego</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('platforms.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="name" class="col-3 col-lg-2 col-form-label text-right">Nombre</label>
                            <div class="col-9 col-lg-10">
                                <input id="name" name="name" type="text" required="yes" placeholder="Nombre" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="aliases" class="col-3 col-lg-2 col-form-label text-right">Alias</label>
                            <div class="col-9 col-lg-10">
                                <input id="aliases" name="aliases" required="yes" placeholder="Alias" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="release_date" class="col-3 col-lg-2 col-form-label text-right">Lanzamiento</label>
                            <div class="col-9 col-lg-10">
                                <input id="release_date" name="release_date" required="yes" placeholder="Fecha de lanzamiento" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="genre_id" class="col-3 col-lg-2 col-form-label text-right">Empresa</label>
                            <div class="col-9 col-lg-10">
                                <select name="company_id" class="form-control" id="input-select" placeholder="Seleccione un género" required="yes">
                                    @foreach($companies as $company)
                                        <option value="{{ $company->id }}"> {{ $company->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-3 col-lg-2 col-form-label text-right">Descripción</label>
                            <div class="col-9 col-lg-10">
                                <textarea class="form-control" id="description" name="description" rows="3" required="yes"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-3 col-lg-2 col-form-label text-right"></label>
                            <div class="col-9 col-lg-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Imagen</label>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

@stop
