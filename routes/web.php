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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PageController@home')->name('homepage');

Route::get('/about', 'PageController@about')->name('aboutpage');

Route::get('/contact', 'PageController@contact')->name('contactpage');

Route::get('/product/{id}', 'PageController@post')->name('productpage');

Route::get('/cart', 'PageController@cart')->name('cartpage');


// CRUD Backend

Route::prefix('data-management')->middleware('auth')->group(function () {
  Route::resource('brand', 'BrandController');

  Route::resource('category', 'CategoryController');

  Route::resource('subcategory', 'SubcategoryController');

  Route::resource('item', 'ItemController');
});

Route::prefix('order-management')->group(function () {
  Route::resource('order', 'OrderController');
});

Route::prefix('user-management')->group(function () {
  Route::resource('customer', 'CustomerController');
});



// Frontend

Route::prefix('frontend')->group(function () {
  Route::get('home', 'FrontendController@home')->name('frontend.home');
  Route::get('shop', 'FrontendController@shop')->name('frontend.shop');
  Route::get('cart', 'FrontendController@cart')->name('frontend.cart');
});



// Authentication 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
