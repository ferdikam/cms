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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->group(function () {
    Route::get('categories', 'CategoriesController@index')->name('categories.index');
    Route::get('categories/create', 'CategoriesController@create')->name('categories.create');
    Route::post('categories', 'CategoriesController@store')->name('categories.store');
});