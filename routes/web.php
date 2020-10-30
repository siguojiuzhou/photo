<?php

use Illuminate\Support\Facades\Route;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/single', function () {
//    return view('single');
//});

Route::group([
    'prefix' => '', 'namespace' => 'Photo'
], function (){
    Route::get('/', 'SingleController@index');
    Route::get('/list/{column_id}', 'SingleController@list');
    Route::get('/single/{id}', 'SingleController@single');
    Route::get('/tag', 'SingleController@tag');
    Route::get('/latest', 'SingleController@latest');
});
