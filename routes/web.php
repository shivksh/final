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
Route::get('reading','insertController@magzineFunc')->name('read');  //magzinepage 


Auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');   //middleware defined for email


Route::group(['middleware'=>['auth','admin']],function(){    //miltiauthentication between user and admin

    Route::get('/dashboard',function(){
        return view('admin.dashboard');
    })->name('adDash');


});




Route::get('/edit/{Id}','insertController@edit')->name('edit');   ////edit method by admin dashboard
Route::post('/update/{Id}','insertController@upd')->name('upd');  //update brand by admin dashboard
Route::get('/delete/{Id}','insertController@delete')->name('delete'); //delete brand
Route::get('/editButton',function(){
    return view('admin.editButton');
});

Route::post('/reviews','insertController@rateButton')->name('reviews'); //reviews adding
Route::get('/index/{Name}','insertController@index')->name('index');    //rating adding
Route::get('/','insertController@homePage')->name('homePage');          //home page without login 
Route::get('/review/{Name}','insertController@reviewdata')->name('review');   //review of a specific brand for user
Route::get('/get',function(){
    return view('reviewUsers');
});

Route::post('/addrev','insertController@addRev')->name('addRev');
Route::get('/adminTable','insertController@dashFunc')->name('dashData');   //brands data manage by admin
Route::get('/userManage','insertController@userManage')->name('userManage');  //userdata manage by admin dashboard



Route::get('/userEdit/{Id}','insertController@userEdit')->name('userEdit');   ////edit method
Route::post('/userUpdate/{Id}','insertController@update')->name('userUpdate');  //update method
Route::get('/userDelete/{Id}','insertController@userDelete')->name('userDelete'); //delete method
Route::get('/checkReview/{Name}','insertController@adminCheckReview')->name('adminReview');  //review chwcked for admin in dashboard
Route::get('/searchbar','insertController@searchbar')->name('searchbar'); //homePage search baar
Route::get('/magSearch','insertController@magSearch')->name('magSearch');  //user page search bar
Route::get('/dashSearch','insertController@dashSearch')->name('dashSearch');  //admin brands search baar
Route::get('/profile','insertController@myprofile')->name('profile');     //admin profile




