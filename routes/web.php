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

Route::get('/us', 'PagesController@getUs');
Route::get('/order', 'PagesController@getOrder');
Route::get('/contact', 'PagesController@getContact');
Route::get('/messages', 'MessagesController@getMessages');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('/messages', 'MessagesController@getMessagest');

Route::post('/contact/submit', 'MessagesController@submit');

Route::resource('posts', 'PostsController');