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
    return view('welcome2');
})->name('welcome2');

Route::get('/about', function () {
    return view('about');
})->name('about');



Route::get('/apply', function () {
    return view('apply');
})->name('apply');




Route::get('/jobsearch', function () {
    return view('jobsearch');
})->name('jobsearch');

Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::get('/service', function () {
    return view('layouts/service');
})->name('service');

Route::get('/jobs', 'JobController@index')->name('jobs');
Route::get('/hotjobs', 'JobController@index')->name('hotjobs');
Route::get('/intership', 'JobController@index')->name('intership');



Route::get('/jobs_it', 'JobController@index_it')->name('jobs_it');
Route::get('/jobs_engineer', 'JobController@index_engineer')->name('jobs_engineer');
Route::get('/jobs_accounting', 'JobController@index_accounting')->name('jobs_accounting');
Route::get('/jobs_bank', 'JobController@index_bank')->name('jobs_bank');
Route::get('/jobs_commercial', 'JobController@index_commercial')->name('jobs_commercial');
Route::get('/jobs_education', 'JobController@index_education')->name('jobs_education');
Route::get('/jobs_garments', 'JobController@index_garments')->name('jobs_garments');
Route::get('/jobs_hr', 'JobController@index_hr')->name('jobs_hr');
Route::get('/jobs_admin', 'JobController@index_admin')->name('jobs_admin');

Route::get('/jobs_design', 'JobController@index_design')->name('jobs_design');
Route::get('/jobs_travel', 'JobController@index_travel')->name('jobs_travel');
Route::get('/jobs_beauty', 'JobController@index_beauty')->name('jobs_beauty');
Route::get('/jobs_electrician', 'JobController@index_electrician')->name('jobs_electrician');
Route::get('/jobs_marketing', 'JobController@index_marketing')->name('jobs_marketing');
Route::get('/jobs_customer', 'JobController@index_customer')->name('jobs_customer');
Route::get('/jobs_media', 'JobController@index_media')->name('jobs_media');


Route::get('/jobs_medical', 'JobController@index_medical')->name('jobs_medical');
Route::get('/jobs_agro', 'JobController@index_agro')->name('jobs_agro');
Route::get('/jobs_ngo', 'JobController@index_ngo')->name('jobs_ngo');
Route::get('/jobs_research', 'JobController@index_research')->name('jobs_research');
Route::get('/jobs_secretary', 'JobController@index_secretary')->name('jobs_secretary');
Route::get('/jobs_driving', 'JobController@index_driving')->name('jobs_driving');
Route::get('/jobs_security', 'JobController@index_security')->name('jobs_security');
Route::get('/jobs_law', 'JobController@index_law')->name('jobs_law');





Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('/insert_job', 'JobController@create')->name('insert_job')->middleware('auth');
Route::post('/home', 'JobController@store')->name('store_job')->middleware('auth');

