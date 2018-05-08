@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="collection-gap">
			<ul class="collection">
				<li class="collection-item dismissable">
	            	<div>
						Täze sapak
		                <a href="{{ url('/admin/lessons/create') }}" class="secondary-content">
		                	<i class="material-icons">edit</i>
	                	</a>
	            	</div>
	        	</li>
	            @foreach ($categories as $category)
	                <li class="collection-item dismissable">
	                	<div>
			                {{ $category->name }}
			                <a href="{{ url('/admin/category/' . $category->id) }}" class="secondary-content">
			                	<i class="material-icons">send</i>
		                	</a>
	                	</div>
	            	</li>
	            @endforeach
	        </ul>
		</div>
	</div>
@stop