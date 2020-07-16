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


Route::get('/insert',function(){
    return view('inserting');
});


Route::post('/entry','insertController@insertData')-> name('enterData');

Route::get('/welcome',function(){

    return view('welcome');
});

Route::get('reading','insertController@magzineFunc')->name('read');
Route::get('eating','insertController@foodFunc')->name('eat');
Route::get('sports','insertController@fitFunc')->name('sports');
Route::get('studio','insertController@movieFunc')->name('studio');
Route::get('thisisbusiness','insertController@businessFunc')->name('busines');
Route::get('otherbrands','insertController@otherFunc')->name('other');





Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin',function(){
    return view('admin.dashboard');
});


