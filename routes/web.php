<?php
Route::group(['middleware' => ['web']], function(){
	Route::get('/', function(){
		return view('welcome');
	})->name('home');
	Route::post('/signup',[
		'uses'=>'usersController@postSignUp',
		'as'=>'signup'
	]);
	Route::post('/signin',[
		'uses'=>'usersController@postSignIn',
		'as'=>'signin'
	]);
	Route::get('/dashboard',[
		'uses'=>'PostController@getDashboard',
		'as'=>'dashboard'
	]);
	Route::post('/createpost',[
		'uses'=>'PostController@postCreatePost',
		'as'=>'post.create'
	]);
	Route::get('/postdelete/{post_id}',[
		'uses'=>'PostController@getDeletePost',
		'as'=>'post.delete'
	]);
	Route::get('/logout',[
		'uses'=>'usersController@getLogout',
		'as'=>'logout'
	]);
});