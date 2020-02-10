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
Route::get('login', 'Auth\LoginController@index')->name('login');

Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@index')->name('register');
Route::post('register', 'Auth\RegisterController@create')->name('register');

Route::get("home/expert/profile", 'UserController@show')->name('expert_profile');
// Route::get("home/expert/profile", 'UserController@show')->name('profile');

Route::get('/expert/event_list', 'AppEventController@showEventList')->name('event_list');
Route::get('/expert/event_list/{id}', 'AppEventController@showEventPost')->name('event_post');
// Route::group(['middleware' => 'auth'], function() {

// });

Route::get('event_org/home', function() {
    return view('dashboard.dash_event_org');
})->name('event_org_home');

Route::get('expert/home', function() {
    return view('dashboard.dash_expert');
})->name('expert_home');

Route::get('/', function() {
    return view('landing_page.index');
})->name('landing');

