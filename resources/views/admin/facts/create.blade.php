@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="collection-gap">
			<div class="card">
				<div class="card-content">
					<form action="{{ url('admin/facts/create') }}" method="POST" class="col s12" enctype="multipart/form-data">

						{{ csrf_field() }}

						<div class="row">
							<div class="input-field col s12">
								<label for="body">Fakt</label>
								<input id="body" name="body" type="text" class="validate" required>
							</div>
							<div class="file-field input-field col s12">
								<div class="btn">
									<span>Surat</span>
									<input type="file" name="image" accept="image/*" required>
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text">
								</div>
							</div>
							<div class="col s12">
								<button type="submit" class="waves-effect waves-light btn right">Iber</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
        @if (count($facts) > 0)
        	<div class="collection-gap">
	            <ul class="collection">
	                @foreach ($facts as $fact)
	                	<li class="collection-item dismissable">
		                    <div>
		                        {{ $fact->body }}
		                        <a href="{{ url('admin/facts/' . $fact->id . '/delete') }}" class="secondary-content"><i class="material-icons">cancel</i></a>
		                    </div>
		                </li>
	                @endforeach
	            </ul>
	        </div>
        @endif
	</div>
@stop