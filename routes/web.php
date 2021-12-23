<?php

use App\Support\Route;

//================= Home =================
Route::get('/', 'HomeController@home');

//================= Exercises =================
Route::get('/exercises', 'ExerciseController@edit');
Route::get('/exercises/new', 'ExerciseController@create');
Route::get('/exercises/answering', 'ExerciseController@index');
Route::get('/exercises/{id}/fields', 'ExerciseController@show');
Route::post('/exercises/{id}/fields', 'ExerciseController@store');
Route::get('/exercises/{id}/state', 'ExerciseController@update');//TODO change to PUT
Route::get('/exercises/{id}/destroy', 'ExerciseController@destroy');//TODO change to DELETE

//================= Answers =================
Route::get('/exercises/{id}/fulfillments/new', 'AnswerController@create');
Route::post('/exercises/{id}/fulfillments', 'AnswerController@store');
Route::get('/exercises/{id}/fulfillments/{fid}/edit', 'AnswerController@edit');
Route::post('/exercises/{id}/fulfillments/{fid}/edit', 'AnswerController@update');//TODO change to PUT
Route::get('/exercises/{id}/results', 'AnswerController@index');
Route::get('/exercises/{id}/results/{rid}', 'AnswerController@showResult');
Route::get('/exercises/{id}/fulfillments/{fid}', 'AnswerController@showFulfillment');

//================= Fields =================
Route::post('/exercise/{id}/fields', 'FieldController@store');
Route::get('/exercises/{id}/fields/{fid}/edit', 'FieldController@edit');
Route::post('/exercises/{id}/fields/{fid}/destroy', 'FieldController@destroy');//TODO change to DELETE
Route::post('/exercises/{id}/fields/{fid}/update', 'FieldController@update');//TODO change to PUT
