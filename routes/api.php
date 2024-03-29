<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;

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

/*
* Snippet for a quick route reference
*/
Route::get('/', function (Router $router) {
    return collect($router->getRoutes()->getRoutesByMethod()["GET"])->map(function($value, $key) {
        return url($key);
    })->values();   
});

// Route::resource('ratings', 'RatingAPIController', [
//     'only' => ['index', 'show', 'store', 'update', 'destroy']
// ]);

// Route::resource('gors', 'GorAPIController', [
//     'only' => ['index', 'show', 'store', 'update', 'destroy']
// ]);

// Route::resource('lapangans', 'LapanganAPIController', [
//     'only' => ['index', 'show', 'store', 'update', 'destroy']
// ]);

// Route::resource('carts', 'CartAPIController', [
//     'only' => ['index', 'show', 'store', 'update', 'destroy']
// ]);

// Route::resource('detailCarts', 'Detail_cartAPIController', [
//     'only' => ['index', 'show', 'store', 'update', 'destroy']
// ]);

// Route::resource('images', 'ImagesAPIController', [
//     'only' => ['index', 'show', 'store', 'update', 'destroy']
// ]);

// Route::resource('users', 'UserAPIController', [
//     'only' => ['index', 'show', 'store', 'update', 'destroy']
// ]);

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'API\UserController@details');
});

Route::post('pesan/{id}', 'AllGorController@pesan');
Route::get('AllGor/{param?}', 'AllGorController@index');
Route::get('GetGor/{id}', 'AllGorController@getGor');