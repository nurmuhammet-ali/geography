@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="collection-gap">
            <ul class="collection">
                @foreach ($countries as $country)
                    <li class="collection-item dismissable">
                        <div>
                            {{ $country->name }}
                            <a href="{{ url('/admin/country/' . $country->id) }}" class="secondary-content"><i class="material-icons">send</i></a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@stop
