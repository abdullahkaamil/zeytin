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


Route::get('/bilgilendirme', function () {
    return view('info');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/hakkimizda', function () {
    return view('about');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/plan', 'HomeController@save')->name('save');
Route::get('/planlar', 'HomeController@plans')->name('plans');
// Route::post('/plan', 'HomeController@plan')->name('plan');
