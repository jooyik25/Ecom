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

Route::get('/home', 'HomeController@index');

// Route::get('/checkout/{id}/', 'CheckoutController@index');
Route::post('/checkout', 'CheckoutController@index')->name('checkout');

Route::post('/summary', 'SummaryController@index')->name('summary');
// Route::post('/confirm', 'SummaryController@index')->name('confirm');

Route::post('/promotion_code', 'PromotionController@code')->name('promotion_code');

Route::post('/country', 'ShippingCountryController@country')->name('country');




