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
/* Authenticated users */
Route::group(['middleware' => 'web'], function () {
    Route::auth();
	
	/************************** Frontend **************************/
    Route::get('/', [
			'uses' => 'HomeController@index',
			'as' => 'home'
	]);

	Route::post('/actualizar-perfil', [
		'uses' => 'ProfileController@update',
		'as' => 'update-profile'
	]);

	Route::get('/perfil', [
			'uses' => 'ProfileController@index',
			'as' => 'profile'
			
	]);

	Route::get('/perfil/pagos/detalle/{id}', [
			'uses' => 'ProfileController@paymentDetail',
			'as' => 'profile.payment.detail'
			
	]);

	Route::get('/pagos/registrar', [
			'uses' => 'ProfileController@createPayment',
			'as' => 'payment.create'

	]);
	Route::post('/pagos/registrar', [
			'uses' => 'ProfileController@storePayment',
			'as' => 'payment.store'
	]);


	/************************** Backend **************************/
	Route::get('/admin', [
			'uses' => 'BackendController@index',
			'as' => 'admin'
	]);
	Route::get('/admin/iniciar-sesion', [
			'uses' => 'BackendController@login',
			'as' => 'admin-login'
	]);
	Route::get('/admin/pagos/listar', [
			'uses' => 'PaymentsController@index',
			'as' => 'admin.payments'
	]);
	Route::get('/admin/pagos/detalle/{id}', [
			'uses' => 'PaymentsController@detail',
			'as' => 'admin.payment.detail'
	]);
	Route::get('/admin/pagos/aprobar/{id}', [
			'uses' => 'PaymentsController@approve',
			'as' => 'admin.payment.approve'
	]);
	Route::get('/admin/pagos/recharzar/{id}', [
			'uses' => 'PaymentsController@reject',
			'as' => 'admin.payment.reject'
	]);
	Route::get('/admin/usuarios/agregar', [
			'uses' => 'UsersController@create',
			'as' => 'admin.user.create'
	]);
	Route::post('/admin/usuaios/guardar', [
			'uses' => 'UsersController@store',
			'as' => 'admin.user.store'
	]);
	Route::get('/admin/usuarios/listar', [
			'uses' => 'UsersController@index',
			'as' => 'admin.users'
	]);
	Route::get('/admin/usurios/detalle/{id}', [
			'uses' => 'UsersController@detail',
			'as' => 'admin.user.detail'
	]);
	Route::get('/admin/usuarios/actualizar/{id}', [
			'uses' => 'UsersController@update',
			'as' => 'admin.user.update'
	]);
	Route::get('/admin/usarios/borrar/{id}', [
			'uses' => 'UsersController@delete',
			'as' => 'admin.user.delete'
	]);

});

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
