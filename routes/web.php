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

//routes yang memnangani halaman awal
Route::get('/', 'IndexController@index')->name('home');


//Route::get('/home', 'IndexController@index')->name('home');
Route::get('show/{slug}', 'IndexController@show')->name('show');
Route::get('all-product', 'IndexController@all_product')->name('all_product');

//routes yang menangani about
Route::get('abouts', 'AboutsController@index')->name('abouts');


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
    Route::resource('/recipes', 'Backend\RecipesController');
    Route::resource('/shippings', 'Backend\ShippingController', ['only' => ['index', 'show', 'destroy', 'update']]);
});


//routes yang menangani api backend
Route::group(['middleware' => 'auth'], function () {
    Route::get('/api/datatable/users', 'Backend\UsersController@dataTable')->name('api.datatable.users');
    Route::get('/api/datatable/categories', 'Backend\CategoriesController@dataTable')->name('api.datatable.categories');
    Route::get('/api/datatable/products', 'Backend\ProductsController@dataTable')->name('api.datatable.products');
    Route::get('/api/datatable/recipes', 'Backend\RecipesController@dataTable')->name('api.datatable.recipes');
    //Route::get('/api/datatable/comments', 'Backend\CommentsController@dataTable')->name('api.datatable.comments');
    Route::get('/api/datatable/shippings', 'Backend\ShippingController@dataTable')->name('api.datatable.shippings');
});


//routes yang menangani recipe
Route::get('recipe', 'RecipeController@index')->name('recipe.index');
Route::get('recipe/show/{slug}', 'RecipeController@show')->name('recipe.show');


//routes yang menangani layouts
Route::get('howtobuy', 'HowtobuyController@index')->name('howtobuy');
Route::get('howtopay', 'HowtopayController@index')->name('howtopay');
Route::get('contactus', 'ContactusController@index')->name('contactus');


//routes yang menangani account
Route::get('account', 'CheckoutController@index')->name('account');
Route::get('account/order/{id}', 'CheckoutController@show')->name('account.show');
Route::get('account/order/{id}/confirm', 'CheckoutController@edit')->name('order.confirm');
Route::post('account/order', 'CheckoutController@confirm')->name('save.confirm');


//routes yang menangani account
Route::get('rekening', 'CheckoutController@rekening')->name('rekening');
Route::get('konfirmasi-pembayaran', 'CheckoutController@confirmation')->name('confirmationpay');
Route::post('konfirmasi-pembayaran', 'CheckoutController@saveOrder')->name('save.order');


//routes yang menangani cart
Route::get('cart', 'CartController@index')->name('cart');
Route::get('cart/add/{id}', 'CartController@addItem');
Route::get('cart/remove/{id}', 'CartController@removeItem');
Route::post('cart/update', 'CartController@update');


//routes yang menangani checkout
Route::get('checkout', 'CheckoutController@index')->name('checkout');
Route::get('checkout/list', 'CheckoutController@create')->name('checkout.create');
Route::post('checkout/list', 'CheckoutController@store')->name('checkout.store');