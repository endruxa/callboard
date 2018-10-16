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
    $user = Auth::user();
    return view('layouts.main', compact('user'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function (){
    Route::get('/profile', 'UserController@profile');
    Route::post('/profile', 'UserController@upload_avatar')->name('upload');

/*Route::group(['middleware' => ['auth']], function (){*/

    Route::resource('/userProfile', 'UserProfileController');

    /*Route::resource('/coach', 'CoachProfileController');

    Route::resource('/company', 'CompanyProfileController');*/

/*});*/

Route::resource('/comment', 'CommentController', ['only' => ['update', 'destroy']]);

Route::post('/comment/create/{userProfile}', 'CommentController@addUserProfileComment')->name('userProfilecomment.store');

});






