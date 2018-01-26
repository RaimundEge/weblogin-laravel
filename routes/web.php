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

Route::get('/', 'DemoController@index');
Route::get('/home', 'DemoController@index')->name('home');
Route::get('/login', 'DemoController@login')->name('login');
Route::get('/logout', 'DemoController@logout')->name('logout');
Route::post('/login', 'DemoController@processLogin')->name('login');
Route::get('/content', 'DemoController@content')->name('content');
Route::get('/register', 'DemoController@register')->name('register');
Route::post('/register', 'DemoController@processRegister')->name('register');