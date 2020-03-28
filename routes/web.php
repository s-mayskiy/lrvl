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

Route::get('/', function () {
    return view('index');
});

Route::get('/', 'HomePageController@index')->name('Home');

Route::group([
    'prefix' => 'news',
    'namespace' => 'News',
    'as' => 'News.'
], function () {
    Route::get('/', 'NewsController@index')->name('index');
    Route::get('/{id}', 'NewsController@getSingleNews')->name('single');
});

Route::group([
    'prefix' => 'categories',
    'namespace' => 'Categories',
    'as' => 'Categories.'
], function () {
    Route::get('/', 'CategoriesController@Categories')->name('index');
    Route::get('/{id}', 'CategoriesController@getCategory')->name('Category');
});



