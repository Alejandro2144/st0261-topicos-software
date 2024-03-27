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
Route::get('/appointment/create', 'App\Http\Controllers\AppointmentController@create')->name('appointment.create');
Route::post('/appointment/save', 'App\Http\Controllers\AppointmentController@save')->name('appointment.save');
Route::get('/appointment', 'App\Http\Controllers\AppointmentController@index')->name('appointment.index');
Route::get('/appointment/{id}', 'App\Http\Controllers\AppointmentController@show')->name('appointment.show');
Route::delete('/appointment/{id}', 'App\Http\Controllers\AppointmentController@delete')->name('appointment.delete');
