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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/available_jobs', 'HomeController@available_jobs')->name('available_jobs');
Route::get('/contact_us', 'HomeController@contact_us')->name('contact_us');
Route::get('/companies', 'HomeController@companies')->name('companies');
Route::get('/user_profile', 'HomeController@user_profile')->name('user_profile');
Route::get('/job_details', 'HomeController@job_details')->name('job_details');
Route::get('/company_details', 'HomeController@company_details')->name('company_details');
Route::get('/post_job', 'HomeController@post_job')->name('post_job');
