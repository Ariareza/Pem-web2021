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
Route::get('/', 'GuestController@index')->name('home');
Route::get('aboutme', 'GuestController@aboutme')->name('aboutme');
Route::get('contactus', 'GuestController@contactus')->name('contactus');
Route::get('produk', 'GuestController@produk')->name('produk');
// Route::get('pertanyaan', 'GuestController@pertanyaan')->name('pertanyaan');

Route::get('pertanyaan', 'PertanyaanController@index')->name('pertanyaan');
Route::post('simpan-pertanyaan', 'PertanyaanController@store')->name('simpan-pertanyaan');

