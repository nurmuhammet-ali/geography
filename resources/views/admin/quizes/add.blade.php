@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="collection-gap">
            <div class="card">
                <div class="card-content">
                    <form action="{{ url('admin/quizes/' . $category->id . '/create') }}" method="POST" class="col s12" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="row">
                            <div class="input-field col s12">
                                <label for="question">Sorag</label>
                                <input id="question" name="question" type="text" class="validate" required>
                            </div>
                            <div class="input-field col s12">
                                <label for="answer">Jogaby</label>
                                <input id="answer" name="answer" type="text" class="validate" required>
                            </div>
                            <div class="input-field col s12">
                                <label for="falsy_answer1">Ýalňyş jogap</label>
                                <input id="falsy_answer1" name="falsy_answer1" type="text" class="validate" required>
                            </div>
                            <div class="input-field col s12">
                                <label for="falsy_answer2">Ýalňyş jogap</label>
                                <input id="falsy_answer2" name="falsy_answer2" type="text" class="validate" required>
                            </div>
                            <div class="input-field col s12">
                                <label for="falsy_answer3">Ýalňyş jogap</label>
                                <input id="falsy_answer3" name="falsy_answer3" type="text" class="validate" required>
                            </div>
                            <div class="file-field input-field col s12">
                                <div class="btn">
                                    <span>Surat</span>
                                    <input type="file" name="image" accept="image/*" required>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                            <div class="col s12">
                                <button type="submit" class="waves-effect waves-light btn right">Iber</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @if (count($quizes) > 0)
            <div class="collection-gap">
                <ul class="collection">
                    @foreach ($quizes as $quiz)
                        <li class="collection-item dismissable">
                            <div>
                                {{ $quiz->question }}
                                <a href="{{ url('admin/quizes/' . $quiz->id . '/delete') }}" class="secondary-content"><i class="material-icons">cancel</i></a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@stop