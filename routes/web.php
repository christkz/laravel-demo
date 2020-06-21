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


Route::get('/', function () {
    return view('welcome');
});
*/
//categories RESTFULL
Route::get('/','Homecontroller@index');
Route::get('categories','CategoriesController@index');
Route::get('categories/create','CategoriesController@create');
Route::post('categories','CategoriesController@store');
Route::get('categories/edit/{category}','CategoriesController@edit');
Route::put('categories/{category}','CategoriesController@update');
Route::post('categories/destroy/{category}','CategoriesController@destroy');


//products RESTFULL
Route::get('/','Homecontroller@index');
Route::get('products','productsController@index');
Route::get('products/create','productsController@create');
Route::post('products','productsController@store');
Route::get('products/edit/{product}','productsController@edit');
Route::put('products/{product}','productsController@update');
Route::post('products/destroy/{product}','productsController@destroy');
