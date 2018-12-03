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

Route::get('/','PagesController@Home');

Route::get('/about', 'PagesController@About');

Route::get('/contact', 'PagesController@Contact');

Route::get('/messages', 'MessagesController@Messages');

Route::post('/contact/submit', 'MessagesController@submit');

Route::get('/messages/delete', 'MessagesController@delete');
