<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





//---ADMIN-------------------------------------------------------------------

Route::group(['middleware'=>'auth'], function(){
	Route::group(['middleware'=>['user','preventBackHistory']], function(){
			Route::get('/admin',[
			'uses'=>'UserController@getAdmin',
			'as'=>'admin.Admin',
			]);

			Route::resource('extra','ExtraController'); 
			Route::resource('pizza','PizzaController');
			Route::resource('adminorders','AdminOrderController');

});
});

//---------USER--------------------------------------------------------
Route::group(['middleware'=>['role','preventBackHistory']], function(){

Route::get('/',[
	'uses'=>'ProductController@getIndex',
	'as'=>'index.Index'
	]);	

Route::get('/online-offer',[
	'uses' => 'ProductController@getPizza',
	'as'=>'product.pizza'
	]);


Route::get('/add-to-cart/{id}',[
	'uses'=>'ProductController@getAddToCart',
	'as'=>'product.addToCart'
	]);

Route::get('/reduce/{id}',[
	'uses'=>'ProductController@getReduce',
	'as'=>'product.reduce']);



Route::get('/shopping-cart',[
	'uses'=>'ProductController@getCart',
	'as'=>'product.shoppingCart'
	]);

	Route::get('/checkout',[
	'uses'=>'ProductController@getCheckout',
	'as'=>'checkout',
	'middleware'=>'auth']);

	Route::post('/checkout',[
	'uses'=>'ProductController@postCheckout',
	'as'=>'checkout',
	'middleware'=>'auth']);

});



//----------------------------------------------------

//Editiranje predmeta
Route::match(['get','put'],'/user/profile/edit/update/', 'UserController@update')->name('update')->middleware('auth','role');

//----------------------------------------------------

Route::group(['prefix'=> 'user'],function(){
	Route::group(['middleware'=>'guest'], function(){

		Route::get('/register',[
		'uses' => 'UserController@getRegister',
		'as'=>'user.register'
		]);

		Route::post('/register',[
		'uses' => 'UserController@postRegister',
		'as'=>'user.register'
		]);

		Route::get('/login',[
		'uses' => 'UserController@getLogin',
		'as'=>'user.login'
		]);

		Route::post('/login',[
		'uses' => 'UserController@postLogin',
		'as'=>'user.login'
		]);

	});

	Route::group(['middleware'=>'auth'], function(){
		Route::group(['middleware'=>'preventBackHistory'], function(){
		Route::get('/profile',[
		'uses'=>'UserController@getProfile',
		'as'=>'user.profile',
		'middleware'=>'role'
		]);
		});

		Route::get('/profile/edit',[
		'uses'=>'UserController@editProfile',
		'as'=>'user.profileUser',
		'middleware'=>'role'

		]);	

		Route::get('/logout',[
		'uses'=>'UserController@getLogout',
		'as' =>'user.logout',
		]);
	});

});





