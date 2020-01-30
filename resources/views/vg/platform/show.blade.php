@extends('layouts.master')

@section('title') Platform details @stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-0  m-b-30" style="overflow:hidden;">

                    @if(strstr( $platform->image, 'http' ) == true )
                        <div class="product-slider fill">
                            <img src="{{$platform->image}}" alt="Game image">
                        </div>
                    @else
                        <div class="product-slider fill">
                            <img src="{{ asset('images/platforms/'.$platform->image) }}" alt="Game image">
                        </div>
                    @endif

                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-0 border-left m-b-30">
                    <div class="product-details">
                        <div class="border-bottom pb-3 mb-3">
                            <h2 class="mb-3">{{$platform->name}}</h2>
                            <div class="product-rating d-inline-block float-right">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                        </div>


                        <div class="product-size border-bottom">
                            <span class="badge badge-primary">Company: {{$platform->Company->name}}</span>
                            <span class="badge badge-info">AKA: {{$platform->aliases}}</span>
                        </div>

                        <div class="product-description border-bottom">
                            <h4 class="mb-1">Descripción</h4>
                            <p>{{$platform->description}}</p>
                        </div>

                        <div class="row" style="margin-top: 10px;margin-left: 5px;">
                            @if(!Auth::user()->isAdmin())
                                <a href="#" class="btn btn-rounded btn-primary separated">Comprar</a>
                            @else
                                <a href="{{ route('platforms.edit', $platform->id) }}" class="btn btn-rounded btn-secondary separated">Editar</a>
                                <form method="POST" action="{{ route('platforms.destroy', $platform->id) }}">{{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button class="btn btn-rounded btn-danger separated" type="submit"
                                            onclick="return confirm('¿Esta seguro de eliminar este registro?')">
                                        Eliminar
                                    </button>
                                </form>
                            @endif
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
