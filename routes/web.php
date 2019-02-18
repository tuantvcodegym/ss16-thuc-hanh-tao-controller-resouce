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
Route::prefix('customer')->group(function (){
   Route::get('index', 'CustomerController@index');
   Route::get('create', 'CustomerController$create');
   Route::post('store', 'CustomerController@store');
   Route::get('show/{id}', 'CustomerController@show');
   Route::get('edit/{id}', 'CustomerController@edit');
   Route::patch('{id}/update', 'CustomerController@update');
   Route::delete('{id}', 'CustomerController@destroy');
});
