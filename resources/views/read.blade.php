@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="lesson-view">
            <div class="card">
                <div class="card-content">
                    <span class="card-title center">{{ $lesson->title }}</span>
                    <p>{!! $lesson->body !!}</p>
                </div>
            </div>
        </div>
    </div>
@stop