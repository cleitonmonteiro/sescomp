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
    return redirect('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/info', 'InfoController@index')->name('info');
Route::get('/about', 'AboutController@index')->name('about');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/act/{activity}', "SubscriptionActivityController@store")->name('actvitity.show'); // try use this patter to macro activities and "." individual activity
});

Route::group(['middleware' => ['auth'], 'prefix' => '/sub'], function () { // note the prefix in URL
    Route::post('/', "SubscriptionEventController@store")->name('sub');
});

Route::group(['middleware' => ['auth'], 'prefix' => '/events'], function () {
    Route::get('/', 'EventController@create')->name('events.create');
    Route::post('/', 'EventController@store')->name('events.store');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
