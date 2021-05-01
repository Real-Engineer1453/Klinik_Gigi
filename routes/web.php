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
})->name('home');

//Auth User Members
Route::get('login_member', 'UserMember\Auth\LoginController@index')->name('login_member');
Route::post('login_member', 'UserMember\Auth\LoginController@login')->name('auth.login_member');
Route::get('logout_member', 'UserMember\Auth\LoginController@logout')->name('auth.logout_member');

Route::get('signup_member', 'UserMember\Auth\SignupController@index')->name('signup_member');
Route::post('signup_member', 'UserMember\Auth\SignupController@signup')->name('auth.signup_member');

Route::get('auth/google', 'UserMember\Auth\GoogleController@redirectToGoogle')->name('auth.redirectToGoogle');
Route::get('auth/google/callback', 'UserMember\Auth\GoogleController@handleGoogleCallback')->name('auth.handleGoogleCallback');

Route::middleware(['auth.user_member'])->name('user_member.')->prefix('user_member')->group(function () {
    // Dashboard
    Route::get('dashboard', 'UserMember\DashboardController@index')->name('dashboard');
});


//Auth User Officers
Route::get('login_officer', 'UserOfficer\Auth\LoginController@index')->name('login_officer');
Route::post('login_officer', 'UserOfficer\Auth\LoginController@login')->name('auth.login_officer');
Route::get('logout_officer', 'UserOfficer\Auth\LoginController@logout')->name('auth.logout_officer');

Route::middleware(['auth.user_officer'])->name('user_officer.')->prefix('user_officer')->group(function () {
    // Dashboard
    Route::get('dashboard', 'UserOfficer\DashboardController@index')->name('dashboard');
    Route::resource('user_member', 'UserOfficer\UserMemberController');
});

