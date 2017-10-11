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

Route::get('/', 'HomeController@index')->name('welcome');

Route::auth();
Route::get('confirm/{id}/{token}', 'InscriptionController@confirm');

Route::group( ['middleware' => ['auth']], function() {

    Route::get('inscription', 'InscriptionController@index')->name('inscription');
    Route::get('inscription/{step}', 'InscriptionController@index')->name('inscriptionStep');
    Route::post('inscription/updateaddresse', 'InscriptionController@updateAddress');

    Route::get('account/addpartner', 'AccountController@addpartner');
    Route::post('account/updatepartner', 'AccountController@updatePartner');
    Route::get('account/details', 'AccountController@details');  
    Route::get('account/detailsform', 'AccountController@formdetails');
    Route::post('account/updatedetails', 'AccountController@updatedetails');

    Route::resource('users', 'UserController');
    Route::get('users/{user}/details', 'UserController@details')->name('getdetails');
    Route::get('users/{user}/addcotisation', 'CotisationController@create')->name('addcotisation');
    Route::post('users/{user}/storecotisation', 'CotisationController@store')->name('storecotisation');
});

Route::group( ['middleware' => ['auth', 'member']], function() {
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
});