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
Route::get('/', 'Auth\LoginController@index');
Route::get('login', 'Auth\LoginController@index');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@index')->name('register');
Route::post('register', 'Auth\RegisterController@create')->name('register');

Route::get('profile', 'UserController@show')->name('profile');

// Route::group(['middleware' => 'auth'], function() {

// });

Route::get('/home/event_org', function() {
    return view('dashboard.dash_event_org');
})->name('eventOrgHome');

Route::get('/home/expert', function() {
    return view('dashboard.dash_expert');
})->name('expertHome');

