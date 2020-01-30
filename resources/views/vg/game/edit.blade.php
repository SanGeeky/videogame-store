@extends('layouts.master')

@section('title') Editar <i>{{$game->name}}</i> @stop

@section('content')
<div class="row">
	<div class="col-md-12">
		<form method="POST" action="{{ route('games.update',$game->id) }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			@method('PUT')

			<div class="form-group row">
				<label for="name" class="col-3 col-lg-2 col-form-label text-right">Nombre</label>
				<div class="col-9 col-lg-10">
					<input id="name" name="name" type="text" required="yes" placeholder="Nombre" class="form-control" value="{{$game->name}}">
				</div>
			</div>

			<div class="form-group row">
				<label for="aliases" class="col-3 col-lg-2 col-form-label text-right">Alias</label>
				<div class="col-9 col-lg-10">
					<input id="aliases" name="aliases" required="yes" placeholder="Alias" class="form-control" value="{{$game->aliases}}">
				</div>
			</div>

			<div class="form-group row">
				<label for="release_date" class="col-3 col-lg-2 col-form-label text-right">Lanzamiento</label>
				<div class="col-9 col-lg-10">
					<input id="release_date" name="release_date" required="yes" placeholder="Fecha de lanzamiento" class="form-control" value="{{$game->release_date}}">
				</div>
			</div>

			<div class="form-group row">
				<label for="genre_id" class="col-3 col-lg-2 col-form-label text-right">Género</label>
				<div class="col-9 col-lg-10">
					<select name="genre_id" class="form-control" id="input-select" placeholder="Seleccione un género" required="yes">
						@foreach($genres as $genre)
						<option value="{{ $genre->id }}"> {{ $genre->name }} </option>
						@endforeach
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label for="description" class="col-3 col-lg-2 col-form-label text-right">Descripción</label>
				<div class="col-9 col-lg-10">
					<textarea class="form-control" id="description" name="description" rows="3" required="yes">{{ $game->description }}</textarea>
				</div>
			</div>


			<div class="form-group row">
				<label for="image" class="col-3 col-lg-2 col-form-label text-right"></label>
				<div class="col-9 col-lg-10">
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="image" name="image">
						<label class="custom-file-label" for="image">Imagen <span>{{$game->image}}</span></label>
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
@stop
