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

// Route::get('/coba', function () {
//     return view('pages.coba');
// });
Route::get('/', 'PasienController@index')->name('user');
Route::get('/dashboard', 'KunjunganController@index')->name('dashboard');
Route::get('/dashboard/cari', 'KunjunganController@filterKunjungan')->name('filterKunjungan');
Route::get('/kamar', 'KamarController@index')->name('kamar');

Route::get('/index/cetakpdf','KunjunganController@generatePDF')->name('cetak');

// Route::get('/admin/login', 'KaryawanLoginController@showLoginForm')->name('authlogin');
// Route::post('/admin/login/proses', 'KaryawanLoginController@login')->name('proseslogin');

Route::get('/farmasi', 'PelayananController@obatPasien')->name('farmasi');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
