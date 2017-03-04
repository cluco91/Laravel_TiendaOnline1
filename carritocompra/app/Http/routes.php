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

Route::get('/', [
	'uses' => 'ProductController@getIndex',
	'as'   => 'product.index'
]);

Route::get('/carrito-compra/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/reducir/{id}', [
    'uses' => 'ProductController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);
Route::get('/eliminar/{id}', [
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.remove'
]);

Route::get('/carrito-compra', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::get('/pagar', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);
Route::post('/pagar', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);


Route::group(['prefix' => 'usuario'], function(){
	Route::group(['middleware' => 'guest'], function(){
		Route::get('/registrarse', [
			'uses' => 'UserController@getSignup',
			'as'   => 'user.signup'
		]);

		Route::post('/registrarse', [
			'uses' => 'UserController@postSignup',
			'as'   => 'user.signup'
		]);

		Route::get('/logearse', [
			'uses' => 'UserController@getSignin',
			'as'   => 'user.signin'
		]);

		Route::post('/logearse', [
			'uses' => 'UserController@postSignin',
			'as'   => 'user.signin'
		]);
	});

	Route::group(['middleware' => 'auth'], function(){
		Route::get('/perfil', [
			'uses' => 'UserController@getProfile',
			'as'   => 'user.profile'
		]);

		Route::get('/logout', [
			'uses' => 'UserController@getLogout',
			'as'   => 'user.logout'
		]);
	});

});