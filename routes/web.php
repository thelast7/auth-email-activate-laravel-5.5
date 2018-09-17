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

//routes yang memnangani halaman awal
Route::get('/', 'IndexController@index')->name('home');
Route::get('/home', 'IndexController@index')->name('home');
Route::get('/show/{slug}', 'IndexController@show')->name('show');
Route::get('/all_product', 'IndexController@all_product')->name('all_product');

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
    Route::resource('/recipes', 'Backend\RecipesController');
    Route::resource('/orders', 'Backend\OrdersController');
});


//routes yang menangani api
Route::group(['middleware' => 'auth'], function () {
    Route::get('/api/datatable/users', 'Backend\UsersController@dataTable')->name('api.datatable.users');
    Route::get('/api/datatable/categories', 'Backend\CategoriesController@dataTable')->name('api.datatable.categories');
    Route::get('/api/datatable/products', 'Backend\ProductsController@dataTable')->name('api.datatable.products');
    Route::get('/api/datatable/recipes', 'Backend\RecipesController@dataTable')->name('api.datatable.recipes');
    //Route::get('/api/datatable/comments', 'Backend\CommentsController@dataTable')->name('api.datatable.comments');
    Route::get('/api/datatable/orders', 'Backend\OrdersController@dataTable')->name('api.datatable.orders');
});


//routes yang menangani recipe
Route::get('/recipe', 'RecipeController@index')->name('recipe.index');
Route::get('/recipe/show/{slug}', 'RecipeController@show')->name('recipe.show');


//routes yang menangani layouts
Route::get('/howtobuy', 'HowtobuyController@index')->name('howtobuy');
Route::get('/howtopay', 'HowtopayController@index')->name('howtopay');
Route::get('/contactus', 'ContactusController@index')->name('contactus');
Route::get('/account', 'AccountController@index')->name('account');
Route::get('/confirmationpay', 'ConfirmationpayController@index')->name('confirmationpay');


//routes yang menangani checkout
Route::resource('checkout', 'CheckoutController');
Route::get('rekening', 'CheckoutController@rekening')->name('rekening');

//Route::get('checkout', 'CheckoutController@index')->name('checkout');
//Route::post('checkout/add', 'CheckoutController@store')->name('checkout.add');
//Route::get('rekening/{id}', 'CheckoutController@rekening')->name('rekening');
//Route::post('checkout/confrim/{id}', 'CheckoutController@confrim')->name('checkout.confrim');
//Route::post('checkout/edit/{id}', 'CheckoutController@confrim')->name('checkout.confrim');


//Route::get('/rekening', 'RekeningController@index')->name('rekening');


//routes yang menangani cart
Route::get('cart', 'CartController@index')->name('cart');
Route::get('cart/add/{id}', 'CartController@addItem');
Route::get('cart/remove/{id}', 'CartController@removeItem');
Route::post('cart/update', 'CartController@update');


//routes yang menangani checkout
Route::get('checkout', 'CheckoutController@index')->name('checkout');