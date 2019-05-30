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
    return view('app.begin');
})->name('home');

Route::get('/one', function() {
    return view('app.view_one');
})->name('one');

Route::get('/two', function() {
    return view('app.view_two');
})->name('two');