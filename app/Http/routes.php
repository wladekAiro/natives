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

//backend routes
Route::group(array('prefix' => 'admin' , 'middleware' => 'auth') , function(){
    Route::get('/', 'HomeController@index');

    // admin theme night routes
    Route::group(array('prefix' => 'theme-night' ) , function(){
        Route::get('/home' , 'AdminThemeNightController@index');
        Route::get('/form', 'AdminThemeNightController@create');
        Route::post('/create', 'AdminThemeNightController@store');
        Route::get('/more/{id}' , array('uses' => 'AdminThemeNightController@show'))->where('id' , '[1-9][0-9]*');
        Route::get('/edit/{id}' , array('uses' => 'AdminThemeNightController@edit'))->where('id' , '[1-9][0-9]*');
        Route::post('/update/{id}' , array('uses' => 'AdminThemeNightController@update'))->where('id' , '[1-9][0-9]*');
        Route::get('/delete/{id}' , array('uses' => 'AdminThemeNightController@destroy'))->where('id' , '[1-9][0-9]*');
    });

    //admin event routes
    Route::group(array('prefix' => 'event' ) , function(){
        Route::get('/home' , 'AdminEventController@index');
    });

    //admin dj controller
    Route::group(array('prefix' => 'dj' ) , function(){
        Route::get('/home' , 'AdminEventController@index');
    });

});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//front routes
Route::group(array('prefix' => 'event') , function(){
    Route::get('/', array('as' => 'front.events','uses'=>'EventsController@index'));
    Route::get('about_us', array('as' => 'user.aboutUs','uses'=>'UserController@aboutUs'));
});


