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

Route::get('/', 'ContentController@homeContent');
Route::get('about',function (){
   return view('aboutPage');
});

Route::get('tutorials',function(){
   return view('tutorials');
});

//TODO: Will implement in future with the user views
//Ahead of its time.
Route::get('profile/{id}', 'UserProfileController@getUserProfile');
