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

Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/behandelingen', 'HomeController@treatment')->name('treatment.index');
Route::get('/contact', 'HomeController@contact')->name('contact.index');

Route::resource('product', 'ProductController');
Route::resource('category', 'CategoryController');
