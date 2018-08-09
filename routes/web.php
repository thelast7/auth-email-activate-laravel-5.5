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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@logoutUser')->name('user.logout');

//routes yang menangani aktivasi
Route::get('auth/activate', 'Auth\ActivationController@activate')->name('auth.activate');

//routes yang menangani backend
Route::group(['prefix' => 'admin'], function() {
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::get('/', 'Backend\AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
    Route::resource('/categories', 'Backend\CategoriesController');
    #Route::get('/categories', 'Backend\CategoriesController@index')->name('admin.categories');
    #Route::post('/categories/create', 'Backend\CategoriesController@store')->name('admin.categories.store');
});

//routes yang menangani resend aktivasi email
Route::get('auth/activate/resend', 'Auth\ActivationResendController@showResendForm')->name('auth.activate.resend');
Route::post('auth/activate/resend', 'Auth\ActivationResendController@resend');

