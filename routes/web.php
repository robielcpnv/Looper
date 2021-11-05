<?php

use App\Support\Route;

Route::get('/', 'HomeController@home');
Route::get('/exercises/answering', 'ExerciseController@take');
Route::get('/exercises/new', 'ExerciseController@create');
Route::get('/exercises', 'ExerciseController@manage');

Route::get('/exercises/fields', 'FieldController@create');