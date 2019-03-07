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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',['as'=>'getDashBoard','uses'=>"InsertController@getRecord"]);

Route::post('insert',['as'=>'postInsert','uses'=>"InsertController@postInsertRecord"]);

Route::post('delete',['as'=>'postDelete','uses'=>"InsertController@postDelete"]);

Route::get('master',['as'=>'getMaster','uses'=>"InsertController@getMaster"]);

Route::get('overview',['as'=>'getOverview','uses'=>"InsertController@getOverview"]);
