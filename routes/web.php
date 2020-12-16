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


Route::group(['middleware' => 'loggedIn'], function(){
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/gor/add', 'AdminController@addPage');
    Route::post('/admin/gor/add', 'AdminController@add');

    //gorku
    Route::get('/gorku', 'GorkuController@index');
    Route::get('/gorku/booking', 'GorkuController@booking');
    Route::get('/gorku/booking/{id_transaksi}', 'GorkuController@bookingDetail');
    Route::get('/gorku/approve/{id_transaksi}', 'GorkuController@approveTransaksi');
    Route::get('/gorku/decline/{id_transaksi}', 'GorkuController@declineTransaksi');
});