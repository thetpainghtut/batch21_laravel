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

// CRUD Backend
Route::middleware('auth')->group(function () {
  Route::resource('brand', 'BrandController'); // 7

  Route::resource('category', 'CategoryController'); // 7

  Route::resource('subcategory', 'SubcategoryController'); // 7

  Route::resource('item', 'ItemController'); // 7

  Route::resource('order', 'OrderController'); // 7
});

// Frontend


// Authentication 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
