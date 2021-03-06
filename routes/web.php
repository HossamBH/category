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

Route::get('/', 'CategoryController@index');

Route::post('create-category', 'CategoryController@create')->name('create');
Route::post('store', 'CategoryController@store')->name('store');
Route::get('categories', 'CategoryController@categories')->name('categories');