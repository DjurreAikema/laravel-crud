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

//Route::resource('product', 'ProductController');
Route::resource('category', 'CategoryController');

Route::get('/products', 'ProductController@index')->name('product.index');
Route::get('/product/create', 'ProductController@create')->name('product.create');
Route::post('/products', 'ProductController@store')->name('product.store');
Route::get('/product/{product}', 'ProductController@show')->name('product.show');
Route::get('/product/{product}/edit', 'ProductController@edit')->name('product.edit');
Route::put('/product/{product}', 'ProductController@update')->name('product.update');
Route::delete('/product/{product}', 'ProductController@destroy')->name('product.destroy');

Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/{category}', 'AdminController@categoryShow')->name('admin.category.show');

