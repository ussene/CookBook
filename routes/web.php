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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::post('/upload', 'ImagesController@store');
Route::get('/blog', 'BlogController@index');

//socialite facebook
/*Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');*/

Route::get('login/facebook', 'Auth\AuthController@redirectToFacebook');
Route::get('login/facebook/callback', 'Auth\AuthController@getFacebookCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
