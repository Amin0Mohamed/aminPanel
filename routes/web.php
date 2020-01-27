<?php

use Illuminate\Support\Facades\Route;


//*********client auth****************
Route::prefix('client')->namespace('Auth')->group(function(){
   // Route::get('/', 'ClientController@index')->name('client.dashboard');

    Route::get('/login', 'ClientLoginController@showLoginForm')->name('client.login');
    Route::post('/login', 'ClientLoginController@login')->name('client.login.submit');
    Route::post('/logout', 'ClientLoginController@logout')->name('client.logout');

    // Registration Routes...
    Route::get('/register', 'ClientRegisterController@showRegistrationForm')->name('client.register');
    Route::post('/register', 'ClientRegisterController@register');

    //    password reset route
    Route::post('/password/email', 'ClientForgotPasswordController@sendResetLinkEmail')->name('client.password.email');
    Route::get('/password/reset', 'ClientForgotPasswordController@showLinkRequestForm')->name('client.password.request');
    Route::post('/password/reset', 'ClientResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'ClientResetPasswordController@showResetForm')->name('client.password.reset');
});




//***********USER AUTH***************
Auth::routes();
Route::post('/user/logout', 'Auth\LoginController@userlogout')->name('user.logout');
Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
