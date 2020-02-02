@extends('layouts.master')


@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-0  m-b-30" style="overflow:hidden;">

				@if(strstr( $game->image, 'http' ) == true )
				<div class="product-slider fill">
					<img src="{{$game->image}}" alt="Game image">
				</div>
				@else
				<div class="product-slider fill">
					<img src="{{ asset('images/games/'.$game->image) }}" alt="Game image">
				</div>
				@endif

			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-0 border-left m-b-30">
				<div class="product-details">
					<div class="border-bottom pb-3 mb-3">
						<h2 class="mb-3">{{$game->name}}</h2>
						<div class="product-rating d-inline-block float-right">
							<i class="fa fa-fw fa-star"></i>
							<i class="fa fa-fw fa-star"></i>
							<i class="fa fa-fw fa-star"></i>
							<i class="fa fa-fw fa-star"></i>
							<i class="fa fa-fw fa-star"></i>
						</div>
						<h3 class="mb-0 text-primary">$49.00</h3>
					</div>


					<div class="product-size border-bottom">
						<span class="badge badge-primary">Genero: {{$game->Genre->name}}</span>
						<span class="badge badge-info">AKA: {{$game->aliases}}</span>
					</div>

					<div class="product-description border-bottom">
						<h4 class="mb-1">Descripción</h4>
						<p>{{$game->description}}</p>
					</div>

					<div class="row" style="margin-top: 10px;margin-left: 5px;">
						@if(!Auth::user()->isAdmin())
                                <button type="button" class="btn btn-rounded btn-primary separated" data-toggle="modal" data-target="#exampleModalCenter">
                                    Comprar
                                </button>
						@else
								<a href="{{ route('games.edit', $game->id) }}" class="btn btn-rounded btn-secondary separated">Editar</a>
								<form method="POST" action="{{ route('games.destroy', $game->id) }}">{{ method_field('DELETE') }}
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
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-b-60">
			<div class="simple-card">
				<ul class="nav nav-tabs" id="myTab5" role="tablist">
					<li class="nav-item">
						<a class="nav-link" id="product-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="product-tab-2" aria-selected="false">Reviews</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent5">

					<div class="tab-pane tab-pane active show" id="tab-2" role="tabpanel" aria-labelledby="product-tab-2">
						<div class="review-block">
							<p class="review-text font-italic m-0">“Vestibulum cursus felis vel arcu convallis, viverra commodo felis bibendum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin non auctor est, sed lacinia velit. Orci varius natoque penatibus et magnis dis parturient montes nascetur ridiculus mus.”</p>
							<div class="rating-star mb-4">
								<i class="fa fa-fw fa-star"></i>
								<i class="fa fa-fw fa-star"></i>
								<i class="fa fa-fw fa-star"></i>
								<i class="fa fa-fw fa-star"></i>
								<i class="fa fa-fw fa-star"></i>
							</div>
							<span class="text-dark font-weight-bold">Virgina G. Lightfoot</span><small class="text-mute"> (Company name)</small>
						</div>
						<div class="review-block border-top mt-3 pt-3">
							<p class="review-text font-italic m-0">“Integer pretium laoreet mi ultrices tincidunt. Suspendisse eget risus nec sapien malesuada ullamcorper eu ac sapien. Maecenas nulla orci, varius ac tincidunt non, ornare a sem. Aliquam sed massa volutpat, aliquet nibh sit amet, tincidunt ex. Donec interdum pharetra dignissim.”</p>
							<div class="rating-star mb-4">
								<i class="fa fa-fw fa-star"></i>
								<i class="fa fa-fw fa-star"></i>
								<i class="fa fa-fw fa-star"></i>
								<i class="fa fa-fw fa-star"></i>
								<i class="fa fa-fw fa-star"></i>
							</div>
							<span class="text-dark font-weight-bold">Ruby B. Matheny</span><small class="text-mute"> (Company name)</small>
						</div>
						<div class="review-block  border-top mt-3 pt-3">
							<p class="review-text font-italic m-0">“ Cras non rutrum neque. Sed lacinia ex elit, vel viverra nisl faucibus eu. Aenean faucibus neque vestibulum condimentum maximus. In id porttitor nisi. Quisque sit amet commodo arcu, cursus pharetra elit. Nam tincidunt lobortis augueat euismod ante sodales non. ”</p>
							<div class="rating-star mb-4">
								<i class="fa fa-fw fa-star"></i>
								<i class="fa fa-fw fa-star"></i>
								<i class="fa fa-fw fa-star"></i>
								<i class="fa fa-fw fa-star"></i>
								<i class="fa fa-fw fa-star"></i>
							</div>
							<span class="text-dark font-weight-bold">Gloria S. Castillo</span><small class="text-mute"> (Company name)</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Comprar - {{$game->name}}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('purchase') }}" enctype="multipart/form-data">
                @method('PUT')
                <div class="modal-body">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="Code">Ingrese Código</label>
                            <input type="text" class="form-control" id="Code" name="code">
                            <input type="hidden" id="user_id" name="user_id"  value="{{ Auth::user()->id }}">
                            <input type="hidden" id="game_id" name="game_id"  value="{{ $game->id }}">
                        </div>
                </div>
                <div class="modal-footer">
{{--                    <a href="{{ route('codes.index') }}">BACK</a>--}}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"> BUY </button>
                </div>
            </form>
        </div>
    </div>
</div>


</div>
@stop
