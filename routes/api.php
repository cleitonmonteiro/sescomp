<?php

use Illuminate\Http\Request;
use App\Event;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('events', 'API\EventController');


Route::prefix('events/{event}/')->group(function () {
    Route::post('activities', 'API\ActivityController@store');
    Route::get('activities', 'API\ActivityController@index');
    Route::get('activities/{activity}', 'API\ActivityController@show');
    Route::put('activities/{activity}', 'API\ActivityController@update');
    Route::delete('activities/{activity}', 'API\ActivityController@destroy');
});

