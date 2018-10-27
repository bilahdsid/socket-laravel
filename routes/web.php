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
    return view('home');
});


//Route::any('home', function () {
//    return view('home');
//});

Route::get('fire', function () {
    // this fires the event
    broadcast(new App\Events\TestEvent());
    return "event fired";
});