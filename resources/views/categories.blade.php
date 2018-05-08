@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="category-selector">
			<div class="card">
				<div class="card-content">
					<h3 class="center red-text text-lighten">
						Synplar
					</h3>


					<h5 class="left red-text text-lighten">Synpyňyzy saýlaň: Geografiýa sapaklar</h5>
					<p>
						@foreach ($categories as $category)
							<a href="{{ url('/category/' . $category->id) }}" class="waves-effect waves-light btn red lighten-1">{{ $category->name }}</a>
						@endforeach
					</p>
				</div>
			</div>
		</div>
	</div>
@stop