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

Route::get("expert/profile", 'UserController@show')->name('expert_profile');
Route::get("event_organizer/profile", 'UserController@show')->name('event_org_profile');

Route::get('event_list', 'AppEventController@showEventList')->name('event_list');
Route::get('event_list/{event}', 'AppEventController@showEventPost')->name('event_post');

Route::get('create_event', 'AppEventController@create')->name('event_create');
Route::post('create_event', 'AppEventController@store')->name('event_store');
Route::get('edit_event/{event}', 'AppEventController@edit')->name('event_edit');
Route::put('edit_event/{event}', 'AppEventController@update')->name('event_update');
Route::delete('edit_event/{event}', 'AppEventController@destroy')->name('event_destroy');
// Route::group(['middleware' => 'auth'], function() {

// });

Route::get('event_organizer/home', 'HomeController@showEventOrg')->name('event_org_home');
Route::get('expert/home', 'HomeController@showExpert')->name('expert_home');

Route::get('/', function() {
    return view('landing_page.index');
})->name('landing');

