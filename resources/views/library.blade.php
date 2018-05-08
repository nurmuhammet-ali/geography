@extends('layouts.app')

@section('content')
    <section class="library">
        <div class="container">
            <div class="content">
                <h2 class="red-text text-lighten-1">Kitaphana</h2>
            </div>
            <div class="row">
                @foreach ($books as $book)
                    <div class="col s12 m12 l4">
                        <div class="book">
                            <div class="cover">
                                <img src="{{ str_replace('public', '/storage', $book->image) }}" alt="">
                            </div>
                            <div class="button">
                                <a href="{{ url(str_replace('public', '/storage', $book->book)) }}" target="_blank">
                                    <button class="btn waves-effect waves-light green darken-1">
                                        {{ $book->title }}
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop
