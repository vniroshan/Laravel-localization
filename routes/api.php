<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/data/{lang}/{id}', 'App\Http\Controllers\LangController@getData');
Route::get('/data/{lang}', 'App\Http\Controllers\LangController@getAllData');
Route::post('/data/add', 'App\Http\Controllers\LangController@addData');
