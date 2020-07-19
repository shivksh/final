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
})->name('insert');


Route::post('/entry','insertController@insertData')-> name('enterData');

Route::get('/welcome',function(){

    return view('welcome');
});

Route::get('/adminmag','adminEdit@magzineFunc')->name('adMag');
Route::get('/adminmov','adminEdit@movieFunc');
Route::get('/adminfit','adminEdit@fitFunc');
Route::get('/adminbus','adminEdit@businessFunc');
Route::get('/adminoth','adminEdit@otherFunc');
Route::get('/adminfoo','adminEdit@foodFunc');












Route::get('reading','insertController@magzineFunc')->name('read');
Route::get('eating','insertController@foodFunc')->name('eat');
Route::get('sports','insertController@fitFunc')->name('sports');
Route::get('studio','insertController@movieFunc')->name('studio');
Route::get('thisisbusiness','insertController@businessFunc')->name('busines');
Route::get('otherbrands','insertController@otherFunc')->name('other');





Auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


Route::group(['middleware'=>['auth','admin']],function(){

    Route::get('/dashboard',function(){
        return view('admin.dashboard');
    })->name('adDash');


});



// Route::get('/edit/{Id}','adminEdit@edit')->name('edit');   ////edit method
// Route::put('/update/{Id}','adminEdit@upd')->name('upd');  //update method
// Route::get('/delete/{Id}','adminEdit@delete')->name('delete'); 
// Route::get('/editButton',function(){
//     return view('admin.editButton');
// });

Route::get('/edit/{Id}','insertController@edit')->name('edit');   ////edit method
Route::post('/update/{Id}','insertController@upd')->name('upd');  //update method
Route::get('/delete/{Id}','insertController@delete')->name('delete'); 
Route::get('/editButton',function(){
    return view('admin.editButton');
});

Route::post('/reviews','insertController@rateButton')->name('reviews');
Route::get('/index/{Name}','insertController@index')->name('index');  
Route::get('/','insertController@homePage')->name('homePage');
Route::get('/review/{Name}','insertController@reviewdata')->name('review');  
Route::get('/get',function(){
    return view('reviewUsers');
});

Route::post('/addrev','insertController@addRev')->name('addRev');