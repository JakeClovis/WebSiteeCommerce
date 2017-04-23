<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil', 'Accueil\AccueilController@index');

Auth::routes();



//email confirmation
Route::get('register/verify/{token}','Auth\RegisterController@verify');

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/comment', 'Comment\CommentController@store');

//profie
Route::get('/profile', 'Profile\UserController@profile');
Route::post('/profile', 'Profile\UserController@update_avatar');

//Facebook login
Route::get('auth/facebook', 'ScocialLogin\FacebookController@redirectToProvider');
Route::get('auth/facebook/callback', 'ScocialLogin\FacebookController@handleProviderCallback');


Route::post('/contact', 'ContactUs\ContactUsController@store');
