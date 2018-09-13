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


/**
 * Main Controller view index
 */
Route::get('/', 'MainController@index');

/**
 * Main Controller view about
 */
Route::get('/about', 'MainController@about');

/**
 * Main Controller view contact
 */
Route::get('/contact', 'MainController@contact');

/**
 * Main Controller view record
 */
Route::get('/record', 'MainController@record');
