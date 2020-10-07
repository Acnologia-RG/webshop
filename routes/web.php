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
	return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/store', 'storeController@index');

Route::get('/article/{id}', 'ArticleController@index');

Route::get('/category/{id}', 'CategoriesController@index');

Route::get('/categories', 'CategoriesController@categories');

Route::get('/shoppingcart', 'shoppingcartController@index')->middleware('auth');

Route::post('/addToCart', 'shoppingcartController@addToCart')->middleware('auth');

Route::get('/delete/{id}', 'shoppingcartController@delete')->middleware('auth');
