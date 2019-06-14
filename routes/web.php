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
    Route::resource('/users', 'Users\UsersController');
    Route::resource('/clients', 'Clients\ClientsController');
    Route::resource('/staff', 'Staff\StaffController');
    Route::resource('roles','RoleController');
    Route::get('/search_clients', 'Search\ClientSearchController');
    Route::get('/search_staff', 'Search\StaffSearchController');
    Route::resource('/events', 'EventController');
    Route::post('events_ajax_update',
        ['uses' => 'EventController@update', 'as' => 'event.ajax_update']);
    Route::post('events_ajax_store',
        ['uses' => 'EventController@store', 'as' => 'event.ajax_store']);
});
Auth::routes(['verify' => true]);

