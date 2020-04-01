<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');

// Students functions
Route::get('/student', 'StudentsController@index')->name('student');
Route::post('/student', 'StudentsController@storeStudent')->name('storeStudent');


// Fees Functions
Route::get('/fees', 'FeesController@index')->name('fees');
Route::post('/fees', 'FeesController@storePayment')->name('storePayment');

