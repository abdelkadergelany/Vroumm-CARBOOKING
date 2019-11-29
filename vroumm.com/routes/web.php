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



Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Login using social network*/
Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('/login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

// Route::get('/login/google', 'Auth\LoginController@redirectToProviderGoogle');
// Route::get('/login/google/callback', 'Auth\LoginController@handleProviderCallbackGoogle');
/*End of login using sociaal network*/

/*Register using social network*/
// Route::get('/register/facebook', 'Auth\RegisterController@redirectToProvider');
// Route::get('/register/facebook/callback', 'Auth\RegisterController@handleProviderCallback');

// Route::get('/register/google', 'Auth\RegisterController@redirectToProviderGoogle');
// Route::get('/register/google/callback', 'Auth\RegisterController@handleProviderCallbackGoogle');

/*end of register using social network*/