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
    return view('masters.blank')->with('title', 'Dashboard');
});

/**
 * Route for Patient Authentication
 */
Route::group(['prefix' => '/patient'], function(){
    Route::get('/', 'Patient\AuthControl@index')->name('patient.index');
    Route::post('/login', 'Patient\AuthControl@loginPost')->name('patient.login');
    Route::get('/logout', 'Patient\AuthControl@logout')->name('patient.logout');
});

/**
 * Route for Patient Dashboard
 */
Route::group(['prefix' => '/patient', 'middleware' => ['patient.loggedIn']], function(){
    Route::get('/profile', function(){
        return view('patient.profile')->with('title', 'Profile');
    });
});

Route::get('/login-doctor', function () {
    return view('login-doctor');
});
