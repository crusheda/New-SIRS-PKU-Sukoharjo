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

Route::get('/admin/login', 'Auth\LoginController@showAdminLoginForm')->name('view.login.admin');
Route::get('/direktur/login', 'Auth\LoginController@showDirekturLoginForm')->name('view.login.direktur');
Route::get('/other_role/login', 'Auth\LoginController@showOtherRoleLoginForm')->name('view.login.other.role');

Route::post('/admin/login', 'Auth\LoginController@loginAdmin')->name('post.login.admin');
Route::post('/direktur/login', 'Auth\LoginController@loginDirektur')->name('post.login.direktur');
Route::post('/other_role/login', 'Auth\LoginController@loginOtherRole')->name('post.login.other.role');
Route::post('/logout', 'Auth\LoginController@logout')->name('post.logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->prefix('admin')->group(function (){
    Route::get('/', function(){return view('page.admin.dashboard');})->name('admin.dashboard');
    Route::get('/dashboard', function(){return view('page.admin.dashboard');})->name('admin.dashboard');
});

Route::middleware(['auth:other_role'])->prefix('other_role')->group(function (){
    Route::get('/', function(){return view('page.other-role.dashboard');})->name('other.role.dashboard');
    Route::get('/dashboard', function(){return view('page.other-role.dashboard');})->name('other.role.dashboard');
});

Route::middleware(['auth:direktur'])->prefix('direktur')->group(function (){
    Route::get('/', function(){return view('page.direktur.dashboard');})->name('direktur.dashboard');
    Route::get('/dashboard', function(){return view('page.direktur.dashboard');})->name('direktur.dashboard');
});
