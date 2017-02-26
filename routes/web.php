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

/*Route::get('about', function () {
    $fruits = ['mango','apple','banana'];
    return view('about',['fruits'=>$fruits]);
});*/


Route::get('about',[
    'as' => 'about',
    'uses' => 'AboutController@about'
]);

Route::get('message',[
    'as' => 'message',
    'uses' => 'MessageController@message'
]);



