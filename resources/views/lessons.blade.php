@extends('layouts.app')

@section('content')
    <section class="lessons">
        <div class="container">
            <div class="content">
                <h2 class="red-text text-lighten-1">Sapaklar</h2>
                <h4 class="red-text text-lighten-1">{{ $category->name }}</h4>
            </div>
            <div class="row">
                @foreach ($lessons as $lesson)
                  <div class="col s12 m12 l6">
                    <div class="card">
                        <div class="card-image">
                          <img src="{{ str_replace('public', '/storage', $lesson->image) }}">
                          <a href="{{ url('/lessons/' . $lesson->id) }}" class="card-title">{{ $lesson->title }}</a>
                        </div>
                        <div class="card-content">
                          <span class="grey-text text-darken-1">
                            {!! substr($lesson->body, 0, 200) !!}...
                          </span>
                        </div>
                    </div>  
                </div>
                @endforeach
            </div>
        </div>
    </section>
@stop
