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
	
    return view('home');
});


Route::get('/language', 'HomeController@ChangeLanguage')->name('language');


Route::get('/about', function () {
    return view('front-pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('front-pages.contact');
})->name('contact');




Route::get('/ride-details', 'HomeController@ride_details')->name('ride-details');
Route::get('/find-ride', 'HomeController@find_ride')->name('find-ride');



Route::match(['get','post'],'/bookride', 'BookrideController@bookride')->name('bookride');
Route::match(['get','post'],'/bookrideconfirmationCallback', 'BookrideController@bookrideconfirmationCallback')->name('bookrideconfirmationCallback');




Route::match(['get','post'],'/offer-ride', 'DashboardController@offer_ride')->name('offer-ride');
Route::get('/profile', 'DashboardController@profile')->name('profile');
Route::get('/photo', 'DashboardController@photo')->name('photo');
Route::get('/mycar', 'DashboardController@mycar')->name('mycar');
Route::get('/offered-rides', 'DashboardController@offered_rides')->name('offered-rides');
Route::get('/booked-rides', 'DashboardController@booked_rides')->name('booked-rides');









Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify'=>true]);



/*Login using social network*/
Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('/login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

