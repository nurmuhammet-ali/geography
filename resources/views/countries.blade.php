@extends('layouts.app')

@section('content')
	<section class="library-nations">
		<div class="container">
			<div class="content">
	            <h2 class="red-text text-lighten-1 center">Ýurtlar</h2>
	        </div>

			<div class="row">
				@foreach ($countries as $country)
					<div class="col s12 m12 l4">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img src="/storage/countries/{{ $country->code }}.png">
							</div>
							<div class="card-content">
								<span class="card-title grey-text text-darken-1">
									@if (strlen($country->name) >= 20)
										{{ substr($country->name, 0, 20) }}...
									@else
										{{ $country->name }}
									@endif
								</span>
								<p class="grey-text text-darken-1">
									{{ $country->about }}
								</p>
							</div>
						</div>
		        	</div>
				@endforeach
	        </div>
		</div>
	</section>
@stop