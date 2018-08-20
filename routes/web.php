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

//routes yang menangani tampilan user
Route::get('/', 'IndexController@index')->name('home');
Route::get('/home', 'IndexController@index')->name('home');
//routes yang menangani about
Route::get('/abouts', 'AboutsController@index')->name('abouts');


//routes yang menangani auth
Auth::routes();
//routes yang menangani aktivasi
Route::get('auth/activate', 'Auth\ActivationController@activate')->name('auth.activate');
//routes yang menangani resend aktivasi email
Route::get('auth/activate/resend', 'Auth\ActivationResendController@showResendForm')->name('auth.activate.resend');
Route::post('auth/activate/resend', 'Auth\ActivationResendController@resend');


//routes yang menangani backend
Route::group(['prefix' => 'backend', 'as' => 'backend.', 'middleware' => 'role:admin'], function () {
    Route::get('/dashboard', 'Backend\HomeController@index')->name('backend.home');
    Route::resource('/users', 'Backend\UsersController');
    Route::resource('/categories', 'Backend\CategoriesController');
    Route::resource('/products', 'Backend\ProductsController');
});


//routes yang menangani api
Route::group(['middleware' => 'auth'], function () {
    Route::get('/api/datatable/users', 'Backend\UsersController@dataTable')->name('api.datatable.users');
    Route::get('/api/datatable/categories', 'Backend\CategoriesController@dataTable')->name('api.datatable.categories');
    Route::get('/api/datatable/products', 'Backend\ProductsController@dataTable')->name('api.datatable.products');
    Route::get('/api/datatable/comments', 'Backend\CommentsController@dataTable')->name('api.datatable.comments');
});


//routes yang menangani halaman
Route::get('/abouts', 'AboutsController@index')->name('abouts');
