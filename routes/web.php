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

Route::get('/', 'PageController@index');

Route::get('/page/about', 'PageController@about');

Route::get('/page/products', 'PageController@products');

Route::get('page/uses', 'PageController@uses');

Route::get('/page/services', 'PageController@services');




Auth::routes(['register' => false]);



Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/admin/dashboard', 'HomeController@index')->name('home');
    Route::resource('admin/pages/home', 'HomepageController');
    Route::resource('admin/pages/about', 'AboutController');
    Route::resource('admin/pages/product', 'ProductController');
    Route::resource('admin/pages/uses', 'UsesController');
    Route::resource('admin/pages/services', 'ServicesController');
});
