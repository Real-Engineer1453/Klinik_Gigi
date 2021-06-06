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

    Route::get('rekam_medis/create/{id}', 'UserOfficer\RekamMedisUserMemberController@create')->name('rekam_medis.create');
    Route::post('rekam_medis/store/{id}', 'UserOfficer\RekamMedisUserMemberController@store')->name('rekam_medis.store');
    Route::get('rekam_medis/edit/{id}', 'UserOfficer\RekamMedisUserMemberController@edit')->name('rekam_medis.edit');
    Route::put('rekam_medis/update/{id}', 'UserOfficer\RekamMedisUserMemberController@update')->name('rekam_medis.update');
});

