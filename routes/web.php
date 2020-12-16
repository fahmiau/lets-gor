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
    return view('user.home');
});

//auth
Route::get('/login','LoginController@index')->middleware('guest');
Route::post('/login','LoginController@login');
Route::get('/logout','LoginController@logout');

Route::get('/register','RegisterController@index')->middleware('guest');
Route::post('/register','RegisterController@register');

Route::get('/gor', function (){
    return view('user.gorDetail');
});

Route::get('/history', function(){
    return view('user.userHistory');
});

Route::get('/search', function(){
    return view('user.hasilSearch');
});

Route::group(['middleware' => 'loggedIn'], function(){
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/gor/add', 'AdminController@addPage');
    Route::post('/admin/gor/add', 'AdminController@add');

    //gorku
    Route::get('/gorku', 'GorkuController@index');
    Route::get('/gorku/booking/terbaru', 'GorkuController@bookingNew');
    Route::get('/gorku/booking/history', 'GorkuController@bookingHistory');
    Route::get('/gorku/booking/{id_transaksi}', 'GorkuController@bookingDetail');
    Route::get('/gorku/approve/{id_transaksi}', 'GorkuController@approveTransaksi');
    Route::get('/gorku/decline/{id_transaksi}', 'GorkuController@declineTransaksi');

    Route::get('/gorku/jadwal', 'GorkuController@jadwal');
    Route::post('/gorku/jadwal', 'GorkuController@updateJadwal');
});