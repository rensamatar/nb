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

	# Staff
	Route::group(array('prefix' => 'staff'), function () {
		Route::get('/', array('as' => 'admin.staff', 'uses' => 'Admin\NabunStaffController@getIndex'));
		Route::get('create', array('as' => 'create/staff', 'uses' => 'Admin\NabunStaffController@getCreate'));
		Route::post('create', 'Admin\NabunStaffController@postCreate');
		Route::get('{staffId}/edit', array('as' => 'update/staff', 'uses' => 'Admin\NabunStaffController@getEdit'));
		Route::post('{staffId}/edit', 'Admin\NabunStaffController@postEdit');
		Route::get('{staffId}/view', array('as' => 'view/staff', 'uses' => 'Admin\NabunStaffController@getView'));
		Route::get('{staffId}/delete', array('as' => 'delete/staff', 'uses' => 'Admin\NabunStaffController@getDelete'));
		Route::get('{staffId}/restore', array('as' => 'restore/staff', 'uses' => 'Admin\NabunStaffController@getRestore'));
	});

	# Career
	Route::group(array('prefix' => 'career'), function () {
		Route::get('/', array('as' => 'admin.career', 'uses' => 'Admin\NabunCareersController@getIndex'));
		Route::get('create', array('as' => 'create/career', 'uses' => 'Admin\NabunCareersController@getCreate'));
		Route::post('create', 'Admin\NabunCareersController@postCreate');
		Route::get('{careerId}/edit', array('as' => 'update/career', 'uses' => 'Admin\NabunCareersController@getEdit'));
		Route::post('{careerId}/edit', 'Admin\NabunCareersController@postEdit');
		Route::get('{careerId}/view', array('as' => 'view/career', 'uses' => 'Admin\NabunCareersController@getView'));
		Route::get('{careerId}/delete', array('as' => 'delete/career', 'uses' => 'Admin\NabunCareersController@getDelete'));
		Route::get('{careerId}/restore', array('as' => 'restore/career', 'uses' => 'Admin\NabunCareersController@getRestore'));
	});

	# Career Wage
	Route::group(array('prefix' => 'wage'), function () {
		Route::get('{careerId}/create', array('as' => 'create/wage', 'uses' => 'Admin\CareerWageController@getCreate'));
		Route::post('{careerId}/create', 'Admin\CareerWageController@postCreate');
		Route::get('{careerId}/edit', array('as' => 'update/wage', 'uses' => 'Admin\CareerWageController@getEdit'));
		Route::post('{careerId}/edit', 'Admin\CareerWageController@postEdit');
		Route::get('{careerId}/delete', array('as' => 'delete/wage', 'uses' => 'Admin\CareerWageController@getDelete'));
	});

	# Career Wage
	Route::group(array('prefix' => 'sub'), function () {
		Route::get('{careerId}/create', array('as' => 'create/sub', 'uses' => 'Admin\CareerStaffController@getCreate'));
		Route::post('{careerId}/create', 'Admin\CareerStaffController@postCreate');
		Route::get('{careerId}/edit', array('as' => 'update/sub', 'uses' => 'Admin\CareerStaffController@getEdit'));
		Route::post('{careerId}/edit', 'Admin\CareerStaffController@postEdit');
		Route::get('{careerId}/delete', array('as' => 'delete/sub', 'uses' => 'Admin\CareerStaffController@getDelete'));
	});

	# Albums
	Route::get('albums', array('as' => 'albums','uses' => 'Admin\AlbumsController@getList'));
	Route::get('albums/create', array('as' => 'albums/create','uses' => 'Admin\AlbumsController@getCreate'));
	Route::post('albums/create', array('as' => 'albums/create','uses' => 'Admin\AlbumsController@postCreate'));
	Route::get('albums/edit/{id}', array('as' => 'albums/edit','uses' => 'Admin\AlbumsController@getEdit'));
	Route::post('albums/edit/{id}', array('as' => 'albums/edit/{id}','uses' => 'Admin\AlbumsController@postEdit'));
	Route::get('deletealbum/{id}', array('as' => 'delete_album','uses' => 'Admin\AlbumsController@getDelete'));
	Route::get('albums/{id}', array('as' => 'show_album','uses' => 'Admin\AlbumsController@getAlbum'));

	# Add Images
	Route::get('addimage/{id}', array('as' => 'add_image','uses' => 'Admin\ImagesController@getAdd'));
	Route::post('addimage', array('as' => 'add_image_to_album','uses' => 'Admin\ImagesController@postAdd'));
	Route::get('deleteimage/{id}', array('as' => 'delete_image','uses' => 'Admin\ImagesController@getDelete'));
	Route::post('moveimage', array('as' => 'move_image', 'uses' => 'Admin\ImagesController@postMove'));

	#summernote upload
	Route::post('activity/upload', array( 'as' => 'admin.activity.upload', 'uses' => 'Admin\NabunActivityController@postUpload'));
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


