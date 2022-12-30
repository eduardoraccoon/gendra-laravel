<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/members', 'App\Http\Controllers\MemberController@index');
Route::post('/add-member','App\Http\Controllers\MemberController@store');

Route::get('/positions', 'App\Http\Controllers\PositionController@index');
Route::post('/add-position', 'App\Http\Controllers\PositionController@store');

