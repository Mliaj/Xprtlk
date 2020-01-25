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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function() {
    return view('login');
});

Route::get('/register', function() {
    return view('register');
});

Route::get('/home/event_org', function() {
    return view('dashboard.dash_event_org');
});

Route::get('/home/expert', function() {
    return view('dashboard.dash_expert');
});

Route::get('/', function() {
    return view('landing_page.index');
});

