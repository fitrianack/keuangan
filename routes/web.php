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
Route::get('/home', 'KeuanganController@home');
Route::get('/profil', 'KeuanganController@profil');
Route::get('/editprofil', 'KeuanganController@edit');
Route::post('/editprofil', 'KeuanganController@update');
Route::get('/agenda', 'KeuanganController@agenda');
Route::get('/rapor', 'KeuanganController@rapor');
