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



Route::get('/', 'MainController@index')->name('main');
Route::get('/forman', 'MainController@forman')->name('forman');


Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/shop/{tovar}', 'ShopController@show')->name('tovar');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart');
Route::delete('/cart/{tovar}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchtosaveforlater/{tovar}', 'CartController@switchtosaveforlater')->name('switchtosaveforlater');

Route::delete('/saveForlater/{tovar}', 'SaveForLaterController@destroy')
->name('saveForlater.destroy');
Route::post('/saveForlater/switchtosaveforlater/{tovar}', 'SaveForLaterController@switchtosaveforlater')
->name('saveForlater.switchtosaveforlater');

Route::get('/contact', 'ContactController@index')->name('contact');

Auth::routes();




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
