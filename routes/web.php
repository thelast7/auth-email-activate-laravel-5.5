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
//    return view('welcome');
//});
Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
//routes yang menangani aktivasi
Route::get('auth/activate', 'Auth\ActivationController@activate')->name('auth.activate');

//routes yang menangani resend aktivasi email
Route::get('auth/activate/resend', 'Auth\ActivationResendController@showResendForm')->name('auth.activate.resend');
Route::post('auth/activate/resend', 'Auth\ActivationResendController@resend');

Route::get('/home', 'HomeController@index')->name('home');


//routes yang menangani backend
Route::resource('/backend/users', 'UsersController', ['as' => 'backend']);
Route::resource('/backend/categories', 'CategoriesController', ['as' => 'backend']);
Route::resource('/backend/products', 'ProductsController', ['as' => 'backend']);
Route::get('/backend/home', 'HomeController@index')->name('backend.home');


//routes yang menangani api
Route::group(['middleware' => 'auth'], function () {
    Route::get('/api/datatable/users', 'UsersController@dataTable')->name('api.datatable.users');
    Route::get('/api/datatable/categories', 'CategoriesController@dataTable')->name('api.datatable.categories');
    Route::get('/api/datatable/products', 'ProductsController@dataTable')->name('api.datatable.products');
    Route::get('/api/datatable/comments', 'CommentsController@dataTable')->name('api.datatable.comments');
});


//routes yang menangani layouts
Route::get('/abouts', 'AboutsController@index')->name('abouts');
Route::get('/all-product', 'AllproductController@index')->name('all-product');
Route::get('/recipe', 'RecipeController@index')->name('recipe');
Route::get('/howtobuy', 'HowtobuyController@index')->name('howtobuy');
Route::get('/howtopay', 'HowtopayController@index')->name('howtopay');
Route::get('/contactus', 'ContactusController@index')->name('contactus');
Route::get('/detail', 'DetprodController@index')->name('detail');