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

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'HomeController@index')->name('home')->middleware('verified');
    Route::resource('/clients', 'Clients\ClientsController');
    Route::resource('/staff', 'Staff\StaffController');
    Route::get('/search', 'Search\ClientSearchController');
});
Auth::routes(['verify' => true]);

