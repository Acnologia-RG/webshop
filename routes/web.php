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

Route::get('/Category/{id}', 'CategoriesController@index');

Route::get('/shoppingcart', 'shoppingcartController@index')->middleware('auth');

Route::get('/addToCart/{id}', 'shoppingcartController@addToCart')->middleware('auth');
