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
  if (Auth::user()){
    return redirect('/home');}
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{id}', 'profileController@index');
Route::post('/addpost','postController@store');
Route::post('/addcoment','comentarioController@store');
Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');
Route::get('users', 'HomeController@users')->name('users');
Route::get('user/{id}', 'HomeController@user')->name('user.view');
Route::post('ajaxRequest', 'HomeController@ajaxRequest')->name('ajaxRequest');
Route::post('ajaxRequest', 'HomeController@ajaxRequest2')->name('ajaxRequest');
Route::get("/logout", "logoutController@logout");
