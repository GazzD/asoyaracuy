<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/************************** Frontend **************************/


Route::get('login', [
	'uses' => 'Auth\AuthController@getLogin',
	'as' => 'login'
	]);
Route::post('iniciar-sesion', [
	'uses' => 'Auth\AuthController@postLogin',
	'as' => 'login'
	]);
Route::get('cerrar-sesion', [
	'uses' => 'Auth\AuthController@getLogout',
	'as' => 'logout'
]);


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::post('/usuarios/actualizar', [
		'uses' => 'UsersController@update',
		'as' => 'user.update'
	]);



});

/* Authenticated users */
Route::group(['middleware' => 'auth'], function()
{
    Route::get('/', [
			'uses' => 'HomeController@index',
			'as' => 'home'
	]);
	Route::get('/perfil', [
			'uses' => 'UsersController@profile',
			'as' => 'profile'
			
	]);
	Route::get('/payment/create', [
			'uses' => 'PaymentsController@create',
			'as' => 'payment.create'

	]);
	Route::post('/payment/store', [
			'uses' => 'PaymentsController@store',
			'as' => 'payment.store'
	]);


	/************************** Backend **************************/
	Route::get('/admin', [
			'uses' => 'BackendController@index',
			'as' => 'admin'
	]);
	Route::get('/admin/login', [
			'uses' => 'BackendController@login',
			'as' => 'admin-login'
	]);
	Route::get('/admin/payment/list', [
			'uses' => 'PaymentsController@index',
			'as' => 'admin.payments'
	]);
	Route::get('/admin/payment/detail/{id}', [
			'uses' => 'PaymentsController@detail',
			'as' => 'admin.payment.detail'
	]);
	Route::get('/admin/payment/approve/{id}', [
			'uses' => 'PaymentsController@approve',
			'as' => 'admin.payment.approve'
	]);
	Route::get('/admin/payment/reject/{id}', [
			'uses' => 'PaymentsController@reject',
			'as' => 'admin.payment.reject'
	]);
	Route::get('/admin/user/create', [
			'uses' => 'UsersController@create',
			'as' => 'admin.user.create'
	]);
	Route::post('/admin/user/store', [
			'uses' => 'UsersController@store',
			'as' => 'admin.user.store'
	]);
	Route::get('/admin/user/list', [
			'uses' => 'UsersController@index',
			'as' => 'admin.users'
	]);
	Route::get('/admin/user/detail/{id}', [
			'uses' => 'UsersController@detail',
			'as' => 'admin.user.detail'
	]);
	Route::get('/admin/user/update/{id}', [
			'uses' => 'UsersController@update',
			'as' => 'admin.user.update'
	]);
	Route::get('/admin/user/delete/{id}', [
			'uses' => 'UsersController@delete',
			'as' => 'admin.user.delete'
	]);

});
