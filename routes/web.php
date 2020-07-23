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

Route::get('/', 'PagesController@home');
Route::get('/istanaPintar', 'PagesController@istanaPintar');
Route::get('/kegiatanSosial', 'PagesController@kegiatanSosial');
Route::get('/pengurus', 'PagesController@pengurus');
Route::get('/buletin', 'PagesController@buletin');
Route::get('/volunteer', 'PagesController@volunteer');
Route::get('/siswa/tambah', 'PagesController@tambahSiswa');
Route::get('buletin-upload', 'BuletinController@fileUpload')->name('file.upload');
Route::post('buletin-upload', 'BuletinController@fileUploadPost')->name('file.upload.post');

