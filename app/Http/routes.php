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
Route::get('/home', 'HomeController@index');
Route::get('/find_us' , 'FrontController@findUs');
Route::get('/contact_us' , 'FrontController@contactUsForm');

//backend routes
Route::group(array('prefix' => 'admin' , 'middleware' => 'auth') , function(){
    Route::get('/', 'HomeController@index');

    // admin theme night routes
    Route::group(array('prefix' => 'theme-night' ) , function(){
        Route::get('/home' , 'AdminThemeNightController@index');
        Route::get('/form', 'AdminThemeNightController@create');
        Route::post('/create', 'AdminThemeNightController@store');
        Route::get('/more/{id}' , array('uses' => 'AdminThemeNightController@show', 'as' => 'show'))->where('id' , '[1-9][0-9]*');
        Route::get('/edit/{id}' , array('uses' => 'AdminThemeNightController@edit'))->where('id' , '[1-9][0-9]*');
        Route::post('/update/{id}' , array('uses' => 'AdminThemeNightController@update'))->where('id' , '[1-9][0-9]*');
        Route::get('/delete/{id}' , array('uses' => 'AdminThemeNightController@destroy'))->where('id' , '[1-9][0-9]*');
		Route::get('/assignDjForm/{id}' , array('uses' => 'AdminThemeNightController@assignDjForm'))->where('id' , '[1-9][0-9]*');
		Route::post('/assignDj' , 'AdminThemeNightController@assignDj');
		Route::get('/addPartnerForm/{id}' , array('uses' => 'AdminThemeNightController@addPartnerForm'))->where('id' , '[1-9][0-9]*');
		Route::post('/addPartner' , 'AdminThemeNightController@addPartner');
		Route::get('/addSponsorForm/{id}' , array('uses' => 'AdminThemeNightController@addSponsorForm'))->where('id' , '[1-9][0-9]*');
		Route::post('/addSponsor' , 'AdminThemeNightController@addSponsor');
    });

    //admin event routes
    Route::group(array('prefix' => 'event' ) , function(){
        Route::get('/home' , 'AdminEventController@index');
        Route::get('/form' , 'AdminEventController@create');
        Route::post('/create' , 'AdminEventController@store');
        Route::get('/more/{id}' , array('uses' => 'AdminEventController@show', 'as' => 'more'))->where('id' , '[1-9][0-9]*');
        Route::get('/edit/{id}' , array('uses' => 'AdminEventController@edit'))->where('id' , '[1-9][0-9]*');
        Route::post('/update/{id}' , array('uses' => 'AdminEventController@update'))->where('id' , '[1-9][0-9]*');
        Route::get('/delete/{id}' , array('uses' => 'AdminEventController@destroy'))->where('id' , '[1-9][0-9]*');
		Route::get('/assignDj/{id}' , array('uses' => 'AdminEventController@assignDjForm'))->where('id' , '[1-9][0-9]*');
		Route::post('/assigndj' , 'AdminEventController@assignDj');
		Route::get('/addPartnerForm/{id}' , array('uses' => 'AdminEventController@addPartnerForm'))->where('id' , '[1-9][0-9]*');
		Route::post('/addPartner' , 'AdminEventController@addPartner');
		Route::get('/addSponsorForm/{id}' , array('uses' => 'AdminEventController@addSponsorForm'))->where('id' , '[1-9][0-9]*');
		Route::post('/addSponsor' , 'AdminEventController@addSponsor');
    });

    //admin dj routes
    Route::group(array('prefix' => 'dj' ) , function(){
        Route::get('/home' , 'AdminDjController@index');
        Route::get('/form' , 'AdminDjController@create');
        Route::post('/create' , 'AdminDjController@store');
        Route::get('/more/{id}' , array('uses' => 'AdminDjController@show'))->where('id' , '[1-9][0-9]*');
        Route::get('/edit/{id}' , array('uses' => 'AdminDjController@edit'))->where('id' , '[1-9][0-9]*');
        Route::post('/update/{id}' , array('uses' => 'AdminDjController@update'))->where('id' , '[1-9][0-9]*');
        Route::get('/delete/{id}' , array('uses' => 'AdminDjController@destroy'))->where('id' , '[1-9][0-9]*');
    });

    //admin partners routes
    Route::group(array('prefix' => 'partner' ) , function(){
        Route::get('/home' , 'AdminPartnersController@index');
        Route::get('/form' , 'AdminPartnersController@create');
        Route::post('/create' , 'AdminPartnersController@store');
        Route::get('/more/{id}' , array('uses' => 'AdminPartnersController@show'))->where('id' , '[1-9][0-9]*');
        Route::get('/edit/{id}' , array('uses' => 'AdminPartnersController@edit'))->where('id' , '[1-9][0-9]*');
        Route::post('/update/{id}' , array('uses' => 'AdminPartnersController@update'))->where('id' , '[1-9][0-9]*');
        Route::get('/delete/{id}' , array('uses' => 'AdminPartnersController@destroy'))->where('id' , '[1-9][0-9]*');
    });

    //admin sponsor routes
    Route::group(array('prefix' => 'sponsor' ) , function(){
        Route::get('/home' , 'AdminSponsorController@index');
        Route::get('/form' , 'AdminSponsorController@create');
        Route::post('/create' , 'AdminSponsorController@store');
        Route::get('/more/{id}' , array('uses' => 'AdminSponsorController@show'))->where('id' , '[1-9][0-9]*');
        Route::get('/edit/{id}' , array('uses' => 'AdminSponsorController@edit'))->where('id' , '[1-9][0-9]*');
        Route::post('/update/{id}' , array('uses' => 'AdminSponsorController@update'))->where('id' , '[1-9][0-9]*');
        Route::get('/delete/{id}' , array('uses' => 'AdminSponsorController@destroy'))->where('id' , '[1-9][0-9]*');
    });

});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//front routes
Route::group(array('prefix' => 'events') , function(){
    Route::get('/', array('as' => 'front.events','uses'=>'EventsController@index'));
    Route::get('about_us', array('as' => 'user.aboutUs','uses'=>'UserController@aboutUs'));
});
Route::group(array('prefix' => 'all_events') , function(){
    Route::get('/', array('as' => 'front.all_events','uses'=>'All_EventsController@index'));
    Route::get('about_us', array('as' => 'user.aboutUs','uses'=>'UserController@aboutUs'));
});
Route::group(array('prefix' => 'event') , function(){
    Route::get('/', array('as' => 'front.event','uses'=>'EventController@index'));
	Route::get('/more/{eventId}', array('uses'=>'EventController@show'))->where('id' , '[1-9][0-9]*');
    Route::get('about_us', array('as' => 'user.aboutUs','uses'=>'UserController@aboutUs'));
});
Route::group(array('prefix' => 'gallery') , function(){
    Route::get('/', array('as' => 'front.gallery','uses'=>'GalleryController@index'));
    Route::get('about_us', array('as' => 'user.aboutUs','uses'=>'UserController@aboutUs'));
});
Route::group(array('prefix' => 'theme') , function(){
    Route::get('/', array('as' => 'front.theme','uses'=>'NightlifeController@index'));
	Route::get('/show/{themeId}', array('uses'=>'NightlifeController@show'))->where('id' , '[1-9][0-9]*');
    Route::get('about_us', array('as' => 'user.aboutUs','uses'=>'UserController@aboutUs'));
});


