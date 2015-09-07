<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@landing');

Route::get('/Legal', 'WelcomeController@index');

Route::get('/Resturant', 'ResturantController@index');
Route::get('/Nightlife', 'NightlifeController@index');

Route::get('admin', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(array('prefix' => 'event') , function(){
    Route::get('/', array('as' => 'front.events','uses'=>'EventsController@index'));
    Route::get('about_us', array('as' => 'user.aboutUs','uses'=>'UserController@aboutUs'));
});
