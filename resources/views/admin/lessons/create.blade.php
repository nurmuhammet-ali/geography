@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="collection-gap">
			<div class="card">
				<div class="card-content">
					<form action="{{ url('admin/lessons/create') }}" method="POST" class="col s12" enctype="multipart/form-data">

					{{ csrf_field() }}

						<div class="row">
							<div class="input-field col s12">
								<label for="lesson_name">Sapagyň ady</label>
								<input id="lesson_name" name="title" type="text" class="validate" required>
							</div>
							<div class="input-field col s12">
								<select name="category">
									@foreach ($categories as $category)
										<option value="{{ $category->id }}">{{ $category->name }}</option>
									@endforeach
								</select>
								<label>Bölüm saýla</label>
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
							<div class="input-field col s12">
								<label for="body">Sapagyň mazmuny</label>
								<textarea id="body" name="body" class="materialize-textarea" required></textarea>
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