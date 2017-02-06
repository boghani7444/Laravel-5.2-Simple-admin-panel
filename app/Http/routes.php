<?php
/******************* FROUNT URL ROUTE START********************/
Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['web']], function(){
	Route::auth();
});

/******************* FROUNT URL ROUTE END********************/

/******************* ADMIN URL ROUTE START********************/
Route::group(['middleware' => ['web'],'prefix' => 'admin'], function () {

    Route::get('login','AdminAuth\AuthController@showLoginForm');
    Route::post('login','AdminAuth\AuthController@login');

    Route::resource('profile','Admin\ProfileController');
    Route::get('changepassword','Admin\ProfileController@changepassword');
    Route::post('changepassword','Admin\ProfileController@changepassword');

    Route::get('logout','AdminAuth\AuthController@logout');

//    Route::post('admin/password/email','AdminAuth\PasswordController@sendResetLinkEmail');
//    Route::post('admin/password/reset','AdminAuth\PasswordController@reset');
//    Route::get('admin/password/reset/{token?}','AdminAuth\PasswordController@showResetForm');

    Route::get('/', 'AdminController@index');

    Route::get('getusers',['uses'=>'Admin\UserController@getUsers']);
    Route::resource('user','Admin\UserController');

    Route::resource('slider','Admin\SliderController');

});
/******************* ADMIN URL ROUTE END********************/