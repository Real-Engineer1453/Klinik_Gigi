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

//Auth
Route::get('login_member', 'UserMember\Auth\LoginController@index')->name('login_member');
Route::post('login_member', 'UserMember\Auth\LoginController@login')->name('auth.login_member');
Route::get('logout_member', 'UserMember\Auth\LoginController@logout')->name('auth.logout_member');

Route::middleware(['auth.user_member'])->name('user_member.')->prefix('user_member')->group(function () {
    // Dashboard
    Route::get('dashboard', 'UserMember\DashboardController@index')->name('dashboard');
});

