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

Route::group(['middleware' => 'locale'], function () {

    // change lang
    Route::post('lang-chooser', 'HomeController@changeLanguage')->name('lang-chooser');

    Route::get('/', 'HomeController@index')->name('Home');
    Route::get('news', 'NewsController@index')->name('news');
    Route::get('singleNews/{news}', 'NewsController@singleNews')->name('singlenews');
   // Route::get('events', 'EventsController@index')->name('events');
  //  Route::get('singleEvent/{event}', 'EventsController@singleEvent')->name('singleEvent');
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::get('aboutUs', 'ContactController@aboutus')->name('aboutUs');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Auth::routes();


Route::middleware('auth')->group(function () {
    Route::get('/my-profile', 'UsersController@edit')->name('users.edit');
    Route::patch('/my-profile', 'UsersController@update')->name('users.update');
    Route::patch('/info_update', 'UsersController@info_update')->name('users.info_update');
    Route::get('/my-orders', 'OrdersController@index')->name('orders.index');
    Route::get('/my-orders/{order}', 'OrdersController@show')->name('orders.show');
});