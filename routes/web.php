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

//Auth User Officers
Route::get('login_officer', 'UserOfficer\Auth\LoginController@index')->name('login_officer');
Route::post('login_officer', 'UserOfficer\Auth\LoginController@login')->name('auth.login_officer');
Route::get('logout_officer', 'UserOfficer\Auth\LoginController@logout')->name('auth.logout_officer');

Route::middleware(['auth.user_officer'])->name('user_officer.')->prefix('user_officer')->group(function () {
    // Dashboard
    Route::get('dashboard', 'UserOfficer\DashboardController@index')->name('dashboard');
    Route::resource('user_member', 'UserOfficer\UserMemberController');
});
