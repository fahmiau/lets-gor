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
    return view('home');
});

//auth
Route::get('/login','LoginController@index')->middleware('guest');
Route::post('/login','LoginController@login');
Route::get('/logout','LoginController@logout');

Route::get('/register','RegisterController@index')->middleware('guest');
Route::post('/register','RegisterController@register');

Route::get('/gor', function (){
    return view('layouts.gorDetail');
});


Route::group(['middleware' => 'loggedIn'], function(){
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/gor/add', 'AdminController@addPage');
    Route::post('/admin/gor/add', 'AdminController@add');

    //gorku
    Route::get('/gorku', 'GorkuController@index');
});