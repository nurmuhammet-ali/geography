@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="collection-gap">
            <ul class="collection">
                <li class="collection-item dismissable">
                    <div>
                        Ýurtlar
                        <a href="{{ url('admin/country') }}" class="secondary-content"><i class="material-icons">send</i></a>
                    </div>
                </li>
                <li class="collection-item dismissable">
                    <div>
                        Sapaklar
                        <a href="{{ url('admin/category') }}" class="secondary-content"><i class="material-icons">send</i></a>
                    </div>
                </li>
                <li class="collection-item dismissable">
                    <div>
                        Gyzykly maglumat goş
                        <a href="{{ url('admin/facts/create') }}" class="secondary-content"><i class="material-icons">send</i></a>
                    </div>
                </li>
                <li class="collection-item dismissable">
                    <div>
                        Kitap goş
                        <a href="{{ url('admin/books/add') }}" class="secondary-content"><i class="material-icons">send</i></a>
                    </div>
                </li>
                <li class="collection-item dismissable">
                    <div>
                        Testler
                        <a href="{{ url('admin/quizes') }}" class="secondary-content"><i class="material-icons">send</i></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

@stop
