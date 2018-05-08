@extends('layouts.app')

@section('content')
    <section class="funny">
        <div class="container">
            <div class="carousel carousel-slider second center">
               @foreach ($facts as $key => $fact)
                 <div class="carousel-item white-text" href="#one!" data-image="{{ str_replace('public', '/storage', $fact->image) }}">
                   <div class="carousel-bg">
                      <span class="counter">
                          {{ $key + 1 }}
                      </span>
                      <p>{{ $fact->body }}</p>
                   </div>
                 </div>
               @endforeach
            </div>
        </div>
    </section>
@stop
