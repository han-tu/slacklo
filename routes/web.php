<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Questions Route
Route::get('/questions/create', 'QuestionController@create');
Route::post('/questions/store', 'QuestionController@store');
Route::get('/questions/edit/{id}', 'QuestionController@edit');
Route::put('/questions/update/{id}', 'QuestionController@update');
Route::get('/questions/delete/{id}', 'QuestionController@delete');
Route::get('/questions/{id}', 'QuestionController@index');

// Answers Route
Route::post('/answers/store/{id}', 'AnswerController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
