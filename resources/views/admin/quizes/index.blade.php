@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="collection-gap">
            <ul class="collection">
                @foreach ($categories as $category)
                    <li class="collection-item dismissable">
                        <div>
                            {{ $category->name }}
                            <a href="{{ url('admin/quizes/' . $category->id) }}" class="secondary-content"><i class="material-icons">send</i></a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@stop
