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

Auth::routes();


    Route::prefix('manage')->middleware('role:superadministrator|author')->group(function(){
    Route::get('/', 'ManageController@index'); 
    Route::get('/dashboard','ManageController@dashboard')->name('manage.dashboard');
    Route::resource('/users', 'UserController');
     
});
Route::get('/home', 'HomeController@index')->name('home');



Route::get('auth/facebook', 'Auth\LoginController@redirectToProviderFacebook');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleProviderCallbackFacebook');


Route::get('auth/google', 'Auth\LoginController@redirectToProviderGoogle');
Route::get('auth/google/callback', 'Auth\LoginController@handleProviderCallbackGoogle');