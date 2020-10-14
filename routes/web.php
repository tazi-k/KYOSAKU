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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('users/search','UserController@search')->name('users.search');
Route::resource('users','UserController');
Route::resource('/users/{user}/matching','MatchingStatusController');
Route::resource('/matchings/{matching}/rooms','RoomController');
Route::resource('/rooms/{room}/chats','ChatController');
