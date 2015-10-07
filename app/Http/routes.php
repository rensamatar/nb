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
Route::controllers([
	//'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);

Route::get('/', 'WelcomeController@index');
Route::get('home', 'WelcomeController@index');
Route::get('about', 'WelcomeController@about');
Route::get('team', 'WelcomeController@team');
Route::get('services', 'WelcomeController@services');
Route::get('client', 'WelcomeController@client');

# Contact us
Route::get('contact', array('as' => 'contact', 'uses' => 'ContactUsController@index'));
Route::post('contact', 'ContactUsController@postIndex');

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

Route::get('admin', array('as' => 'admin/signin','uses' => 'AuthController@getAdminSignin'));
Route::post('admin/signin', 'AuthController@postAdminSignin');
Route::get('admin/signout', array('as' => 'admin/signout', 'uses' => 'AuthController@getAdminSignout'));

Route::group(array('prefix' => 'admin','middleware' => 'auth.admin'), function () {

	Route::get('dashboard', array( 'as' => 'dashboard', 'uses' => 'Admin\DashboardController@index'));
	Route::resource('activity', 'Admin\NabunActivityController');
	Route::resource('career', 'Admin\NabunCareersController');
	Route::resource('staff', 'Admin\NabunStaffController');

});

/*
|--------------------------------------------------------------------------
| Member Routes 
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(array('prefix' => 'auth'), function () {

    # Login
	Route::get('signin', array('as' => 'signin', 'uses' => 'AuthController@getSignin'));
	Route::post('signin', 'AuthController@postSignin');

    # Register
	Route::get('signup', array('as' => 'signup', 'uses' => 'AuthController@getSignup'));
	Route::post('signup', 'AuthController@postSignup');

    # Account Activation
	Route::get('activate/{activationCode}', array('as' => 'activate', 'uses' => 'AuthController@getActivate'));

    # Forgot Password
	Route::get('forgot-password', array('as' => 'forgot-password', 'uses' => 'AuthController@getForgotPassword'));
	Route::post('forgot-password', 'AuthController@postForgotPassword');

    # Forgot Password Confirmation
	Route::get('forgot-password/{passwordResetCode}', array('as' => 'forgot-password-confirm', 'uses' => 'AuthController@getForgotPasswordConfirm'));
	Route::post('forgot-password/{passwordResetCode}', 'AuthController@postForgotPasswordConfirm');

    # Logout
	Route::get('logout', array('as' => 'logout', 'uses' => 'AuthController@getLogout'));

});

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Here is where you can call from device to get Careers and our Activity.
|
|
*/
Route::group(array('prefix' => 'api'), function () {

    # Career
    Route::get('career', array('as' => 'career', 'uses' => 'APIController@getCareer'));

    # Activity
    Route::get('event', array('as' => 'event', 'uses' => 'APIController@getActivity'));

    # Staff
    Route::get('staff', array('as' => 'staff', 'uses' => 'APIController@getStaff'));
    
});


