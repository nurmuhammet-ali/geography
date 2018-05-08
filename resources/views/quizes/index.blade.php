@extends('layouts.app')

@section('content')
	<div id="app">
		<quiz questions="{{ $questions }}"></quiz>
	</div>
@stop