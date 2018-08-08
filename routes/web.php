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

//Route::get('/', function () {
//    return view('layouts._home.index');
//});

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
//routes yang menangani aktivasi
Route::get('auth/activate', 'Auth\ActivationController@activate')->name('auth.activate');

//routes yang menangani backend
Route::group(['prefix' => 'admin'], function() {
    Route::get('/login', 'Backend\AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Backend\AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::get('/', 'Backend\AdminController@index')->name('admin.dashboard');
});

//routes yang menangani resend aktivasi email
Route::get('auth/activate/resend', 'Auth\ActivationResendController@showResendForm')->name('auth.activate.resend');
Route::post('auth/activate/resend', 'Auth\ActivationResendController@resend');

Route::get('/home', 'HomeController@index')->name('home');
