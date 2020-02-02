@extends('layouts.master')

@section('title') Géneros @stop


@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if(Auth::user()->isAdmin())
                        <form method="POST" action="{{ route('codes.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-primary add-button">
                                Generar Código
                            </button>
                        </form>
                    @endif

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Código</th>
                                <th scope="col">Estado</th>
                                @if(Auth::user()->role==User::ROLE_ADMIN)
                                <th scope="col">Eliminar</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($codes as $index=>$code)
                            <tr>
                                <td scope="row">{{ $index + 1 }}</td>
                                <td scope="row" class="text-monospace">{{$code->code}}</td>
                                @if(!$code->status)
                                    <td scope="row" style="color: green">Código Disponible</td>
                                @else
                                    <td scope="row" style="color: red">Código Usado</td>
                                @endif

                                @if(Auth::user()->isAdmin())
                                <td>
                                    <form method="POST" action="{{ route('codes.destroy', $code->id) }}">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit"
                                        onclick="return confirm('¿Esta seguro de eliminar este código?')" class="btn btn-sm">
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
@stop
