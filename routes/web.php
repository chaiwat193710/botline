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
    return view('welcome');
});
Route::get('/templet', function () {
    return view('index');
});
Route::get('/book', function () {
    return view('book/book');
});
Route::get('/activities', function () {
    return view('activities/activities');
});
Route::get('/activitiesadd', function () {
    return view('activities/activitiesadd');
});
Route::get('/bookadd', function () {
    return view('book/bookadd');
});
Route::get('/service', function () {
    return view('service/service');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
