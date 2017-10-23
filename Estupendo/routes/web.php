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

Route::get('/', function () {
    return view('Home.homepage');
});


Route::get('/villas', function () {
    return view('Villas.allvillas');
});


Route::get('/villa_details', function () {
    return view('Villas.villa_details');
});

Route::get('/admin/home', function () {
    return view('Admin.Home.dashboard');
});

Route::get('/admin/welcome-text', function () {
    return view('Admin.Home.welcometxt');
});

Route::Resource('welcometext','WelcometextController');
