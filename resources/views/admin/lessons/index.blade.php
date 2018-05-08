@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="collection-gap">
			<ul class="collection">
	            @foreach ($lessons as $lesson)
	                <li class="collection-item dismissable">
	                	<div>
			                {{ $lesson->title }}
			                <a href="{{ url('/admin/lessons/' . $lesson->id) }}" class="secondary-content">
			                	<i class="material-icons">edit</i>
		                	</a>
	                	</div>
	            	</li>
	            @endforeach
	        </ul>
		</div>
	</div>
@stop