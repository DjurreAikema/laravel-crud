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

Route::group(['middleware' => 'auth'], function () {
    // Protected product routes
    Route::get('/product/create', 'ProductController@create')->name('product.create');
    Route::post('/products', 'ProductController@store')->name('product.store');
    Route::get('/product/{product}/edit', 'ProductController@edit')->name('product.edit');
    Route::put('/product/{product}', 'ProductController@update')->name('product.update');
    Route::delete('/product/{product}', 'ProductController@destroy')->name('product.destroy');

    // Protected category routes
    Route::get('/categorie/create', 'CategoryController@create')->name('category.create');
    Route::post('/categorieen', 'CategoryController@store')->name('category.store');
    Route::get('/categorie/{categorie}/edit', 'CategoryController@edit')->name('category.edit');
    Route::put('/categorie/{categorie}', 'CategoryController@update')->name('category.update');
    Route::delete('/categorie/{categorie}', 'CategoryController@destroy')->name('category.destroy');

    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('/admin/{category}', 'AdminController@categoryShow')->name('admin.category.show');
});

// Public product routes
Route::get('/products', 'ProductController@index')->name('product.index');
Route::get('/product/{product}', 'ProductController@show')->name('product.show');

// Public category routes
Route::get('/categorieen', 'CategoryController@index')->name('category.index');
Route::get('/categorie/{categorie}', 'CategoryController@show')->name('category.show');

