@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="collection-gap">
			<div class="card">
				<div class="card-content">
					<form action="{{ url('admin/books/store') }}" method="POST" class="col s12" enctype="multipart/form-data">

					{{ csrf_field() }}

						<div class="row">
							<div class="input-field col s12">
								<label for="lesson_name">Kitabyň ady</label>
								<input id="lesson_name" name="title" type="text" class="validate" required>
							</div>
							<div class="file-field input-field col s12">
								<div class="btn">
									<span>Kitap</span>
									<input type="file" name="book" required>
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text">
								</div>
							</div>
							<div class="file-field input-field col s12">
								<div class="btn">
									<span>Kitabyň suraty</span>
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
	</div>
@stop