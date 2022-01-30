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
    return view('welcome');
});



Route::get('/index','PostController@index')->name('post.index');
Route::get('/posts/create','PostController@create');

Route::post('/posts','PostController@store')->name('post.store');
Route::get('/posts/{post}','PostController@show')->name('post.show');
Route::get('/posts/{post}/edit','PostController@edit')->name('post.edit');
Route::patch('/posts/{post}','PostController@update')->name('post.update');
Route::delete('/posts/{post}','PostController@destroy')->name('post.delete');



Route::get('/posts/update','PostController@update');
Route::get('/posts/delete','PostController@delete');
Route::get('/posts/firs_or_crete','PostController@firsOrCreate');
Route::get('/posts/update_or_crete','PostController@updateOrCreate');

Route::get('/main','MainController@index')->name('main.index');

Route::get('/main_product','Main_productController@index')->name('product.main');

Route::prefix('product')->group(function(){
    Route::get('/create','Main_productController@create')->name('product.create');
    Route::post('/add_db','Main_productController@add_db')->name('product.add_db');
    Route::get('/show','Main_productController@show')->name('product.show');
    Route::delete('/delete/{product}','Main_productController@delete')->name('product.delete');
    Route::get('/edit/{product}','Main_productController@edit')->name('product.edit');
    Route::patch('/update/{product}','Main_productController@update')->name('product.update');

});