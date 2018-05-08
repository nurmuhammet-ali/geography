@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="collection-gap">
			<div class="card">
				<div class="card-content">
					<form action="{{ url('/admin/country/' . $country->id . '/edit') }}" method="POST" class="col s12" enctype="multipart/form-data">

						{{ csrf_field() }}

						<div class="row">
							<div class="file-field input-field col s12">
								<div class="btn">
									<span>Baýdak</span>
									<input type="file" name="flag" accept="image/*">
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text">
								</div>
							</div>
							<div class="input-field col s12">
								<label for="name">Ady</label>
								<input id="name" name="name" type="text" value="{{ $country->name }}" class="validate" required>
							</div>
							<div class="input-field col s12">
								<label for="capital">Paýtagty</label>
								<input id="capital" name="capital" type="text" value="{{ $country->capital }}" class="validate" required>
							</div>
							<div class="input-field col s12">
								<label for="area">Tutýan meýdany</label>
								<input id="area" name="area" type="text" value="{{ $country->area }}" class="validate" required>
							</div>
							<div class="input-field col s12">
								<label for="consitutional_form">Döwlet dolandyrylyşy</label>
								<input id="consitutional_form" name="consitutional_form" type="text" value="{{ $country->consitutional_form }}" class="validate" required>
							</div>
							<div class="input-field col s12">
								<label for="president">Prezidenti</label>
								<input id="president" name="president" type="text" value="{{ $country->president }}" class="validate" required>
							</div>
							<div class="input-field col s12">
								<label for="population">Ilaty</label>
								<input id="population" name="population" type="text" value="{{ $country->population }}" class="validate" required>
							</div>
							<div class="input-field col s12">
								<label for="about">Barada</label>
								<input id="about" name="about" type="text" value="{{ $country->about }}" class="validate" required>
							</div>
							<div class="col s12">
								<button type="submit" class="waves-effect waves-light btn right">Iber</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop