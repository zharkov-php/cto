<?php

Route::get('/', 'MainController@index');
Route::get('/about', 'MainController@about');
Route::get('/contact', 'MainController@contact');
Route::get('/service', 'ServiceController@index');

Route::get('/record', 'MainController@record')->name('record.index');


/**
 * Auth
 */
Auth::routes();

/**
 * Mail
 */
Route::post('/send', 'MailController@send')->name('send');
Route::post('/sendrecord', 'RecordController@send')->name('send.record');


/**
 *Admin controller
 */
Route::group(['middleware' => 'auth'], function () {
    Route::resource('admin/services', 'Admin\ServicesController');
    Route::resource('admin', 'Admin\AdminController');

});
