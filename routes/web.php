<?php

use App\Http\Controllers\ScoreController;

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

Route::get('/', 'ScoreController@index')->name('home');

Route::get('/scores/create', 'ScoreController@create')->name('scores.create');
Route::post('/scores', 'ScoreController@store')->name('scores.store');