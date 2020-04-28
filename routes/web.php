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
|Route::get('/', function () {
    |   return view('home');
|});
|
|Route::get('/contact', function () {
 |   return view('contact');
|});
|
|Route::get('/about', function () {
 |   return view('about');
|});
|
*/

Route::get('/', 'PagesController@getHome');
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');

Route::get('/messages', 'MessagesController@getMessages');


Route::post('/contact/submit', 'MessagesController@submit');
