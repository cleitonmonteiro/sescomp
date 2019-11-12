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
    Route::get('/act/{activity}', "SubscriptionActivityController@store")->name('actvitity.show');
    Route::get('/support/{event}', 'SupportController@index')->name('add.support');
    Route::post('/support', 'SupportController@add')->name('add.support.store');
    
});

Route::group(['middleware' => ['auth'], 'prefix' => '/sub'], function () { // note the prefix in URL
    Route::post('/', "SubscriptionEventController@store")->name('sub');
    Route::get('/activities/{id}', "SubscriptionActivityController@store" )->name('activities.sub');
});

Route::group(['middleware' => ['auth'], 'prefix' => '/speaker'], function () { // note the prefix in URL
    Route::get('/activities', "ActivityController@index" )->name('activities.index');
});


Route::group(['middleware' => ['auth'], 'prefix' => '/events'], function () {
    Route::get('/', 'EventController@create')->name('events.create');
    Route::post('/', 'EventController@store')->name('events.store');
});

Route::group(['prefix' => '/events'], function () {
    Route::get('/{event}', 'EventController@show')->name('events.show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
