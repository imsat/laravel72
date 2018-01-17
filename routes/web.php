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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/', function (){
////    return "Hello World";
//    return view('home');
//});
//Route::get('/bitm', function (){
////    return "Hello BITM";
//    return view('welcome');
//});

Route::get('/', 'StudentController@index');

//Route::get('/basis/bitm', function (){
//    return "Hello basis BITM";
//
//});


