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
Route::get('/facilities', 'FacilitiesController@index')->name('facilities');

// Halaman Admin
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function(){
        Route::resource('/', 'DashboardController');
        Route::resource('minimal-salaries', 'MinimalSalariesController');
        Route::resource('maksimal-bpjskesehatan', 'MaksimalBpjsKesehatanController');
        Route::resource('maksimal-bpjsketenagakerjaan', 'MaksimalUpahBpjsKetenagakerjaanController');
        Route::resource('companies', 'CompaniesController');
        Route::resource('golongan', 'GolongansController');
    });

Auth::routes(['verify' => true]);
