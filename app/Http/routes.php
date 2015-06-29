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

Route::get('/', 'WelcomeController@index');
Route::get('home', 'WelcomeController@index');
Route::get('about', 'WelcomeController@about');
Route::get('clients', 'WelcomeController@career');
Route::get('contact', 'ContactUsController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

# Activity
Route::get('activities', array( 'as' => 'activities', 'uses' => 'NabunActivityController@index'));
Route::get('activities/{id}', array( 'as' => 'activities/view', 'uses' => 'NabunActivityController@view'));

# Career
Route::get('careers', array( 'as' => 'careers', 'uses' => 'NabunCareerController@index'));
Route::get('careers/{id}', array( 'as' => 'careers/view', 'uses' => 'NabunCareerController@view'));

/*
|--------------------------------------------------------------------------
| Admin Routes 
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('dashboard', array( 'as' => 'dashboard', 'uses' => 'Admin\DashboardController@index'));
Route::resource('activity', 'Admin\NabunActivityController');
Route::resource('career', 'Admin\NabunCareersController');

