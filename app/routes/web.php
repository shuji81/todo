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

Route::get('/','TodoController@index');
Route::post('/todo/create','TodoController@create')->name('todo.create');
Route::post('/todo/update','TodoController@update')->name('todo.update');
Route::post('/todo/delete','TodoController@delete')->name('todo.delete');
