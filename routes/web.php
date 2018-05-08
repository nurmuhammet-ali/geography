<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('flag-game', 'FlagGameController@index')->name('flag-game');
Route::get('capital-game', 'CapitalGameController@index')->name('capital-game');
Route::get('categories', 'CategoriesController@index')->name('categories');
Route::get('quizes', 'QuizesController@index')->name('quizes');
Route::get('quizes/{quiz}', 'QuizesController@show')->name('quiz');
Route::get('category/{category}', 'LessonsController@index')->name('lessons');
Route::get('lessons/{lesson}', 'LessonsController@read')->name('read');
Route::get('facts', 'FactsController@index')->name('facts');
Route::get('library', 'LibraryController@index')->name('library');
Route::get('maps', 'MapsController@index')->name('maps');
Route::get('countries', 'CountriesController@countries')->name('countries');

Route::group(['prefix' => 'admin'], function() {

    Route::get('login', 'AuthController@showLogin')->name('login');
    Route::post('login', 'AuthController@login');

    Route::group(['middleware' => 'auth'], function() {
        Route::get('logout', 'AuthController@logout');

        Route::get('/', 'AdminController@index');

        Route::get('/create', 'AdminController@create');
        Route::post('/create', 'AdminController@save');
        Route::get('delete/{user}', 'AdminController@delete');

        Route::get('/country', 'CountriesController@index');
        Route::get('/country/{country}', 'CountriesController@show');
        Route::post('/country/{country}/edit', 'CountriesController@edit');


        Route::get('/category', 'AdminLessonsController@categories');
        Route::get('/category/{category}', 'AdminLessonsController@index');

        Route::get('/lessons/create', 'AdminLessonsController@create');
        Route::post('/lessons/create', 'AdminLessonsController@store');
        Route::post('/lessons/{lesson}/edit', 'AdminLessonsController@edit');
        Route::get('/lessons/{lesson}', 'AdminLessonsController@show');

        Route::get('/facts/create', 'FactsController@create');
        Route::get('/facts/{fact}/delete', 'FactsController@delete');
        Route::post('/facts/create', 'FactsController@store');

        Route::get('/books/add', 'BooksController@add');
        Route::post('/books/store', 'BooksController@store');

        Route::get('/quizes', 'QuizesController@all');
        Route::get('/quizes/{category}', 'QuizesController@add');
        Route::post('/quizes/{category}/create', 'QuizesController@create');
        Route::get('/quizes/{quiz}/delete', 'QuizesController@delete');
    });
});
