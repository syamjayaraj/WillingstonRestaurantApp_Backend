<?php

use Illuminate\Http\Request;

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


// People

Route::get('people', 'PeopleController@show');


/* Products */

Route::get('products', 'ProductController@show');


/* Tariffs */

Route::get('tariffs', 'ProductController@tariff');

/* Order Product */

Route::post('order', 'OrderController@store');

Route::get('order', 'OrderController@show');


/* Print */

Route::post('printtokitchen', 'OrderController@printtokitchen');


