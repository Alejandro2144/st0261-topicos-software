<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('product.index');

Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name('product.create');

Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name('product.save');

Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');

Route::delete('/products/{id}', 'App\Http\Controllers\ProductController@delete')->name('product.delete');
