<?php

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

Route::get('/questions', 'QuestionController@index');
Route::get('/questions/{question}', 'QuestionController@show');

Route::post('/'. env('TELEGRAM_BOT_TOKEN', '') .'/webhook', '@BotController@update');
