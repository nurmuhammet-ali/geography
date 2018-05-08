@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="collection-gap">
            <div class="card">
                <div class="card-content">
                    <form action="{{ url('admin/create') }}" method="POST" class="col s12">

                        {{ csrf_field() }}

                        <div class="row">
                            <div class="input-field col s12">
                                <label for="name">Ady</label>
                                <input id="name" name="name" type="text" value="{{ old('name') }}" class="validate" required>
                            </div>
                            <div class="input-field col s12">
                                <label for="email">Email</label>
                                <input id="email" name="email" type="email" value="{{ old('email') }}" class="validate" required>
                            </div>
                            <div class="input-field col s12">
                                <label for="password">Açarsöz</label>
                                <input id="password" name="password" type="password" class="validate" required>
                            </div>
                            <div class="col s12">
                                <button type="submit" class="waves-effect waves-light btn right">Içeri gir</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @if (count($users) > 0)
                <div class="collection-gap">
                    <ul class="collection">
                        @foreach ($users as $user)
                            <li class="collection-item dismissable">
                                <div>
                                    {{ $user->name }} - {{ $user->email }}
                                    <a href="{{ url('admin/delete/' . $user->id) }}" class="secondary-content"><i class="material-icons">cancel</i></a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@stop