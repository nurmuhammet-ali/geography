<?php

Route::post('countries/{country}', 'Api\\CountriesController@get');
Route::post('flag/questions', 'FlagGameController@questions');
Route::post('capital/questions', 'CapitalGameController@questions');
