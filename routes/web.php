<?php
use App\Http\Controllers\TestController;
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
Route::get('/','TestController@index');
Route::get('delete/{id}','TestController@delete');
Route::post('save','TestController@save');
Route::post('update','TestController@update');