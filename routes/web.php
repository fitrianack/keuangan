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
Route::get('/lihatdata', 'KeuanganController@lihatdata');
Route::get('/lihatsaldo', 'KeuanganController@saldo');
Route::get('/create_keuangan', 'KeuanganController@lihattambah');
Route::post('/create_keuangan', 'KeuanganController@tambah');
Route::get('/edituang/{id}/edit', 'KeuanganController@edit');
Route::post('/edituang/update/{id}', 'KeuanganController@update');
Route::get('/hapus/{id}/destroy', 'KeuanganController@destroy');