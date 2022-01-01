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

Route::get('/','JobResponseController@index')->middleware('auth');

Route::get('/dashboard','JobResponseController@index')->middleware('auth');


Route::get('/jobs','JobController@index')->middleware('auth');
Route::post('/jobs','JobController@store')->middleware('auth');
Route::get('/job/delete/{id}','JobController@destroy')->name('job.delete')->middleware('auth');

Route::get('/addjob', function () { return view('bw_jobs_add'); })->middleware('auth');

Route::get('/resumes','JobResponseController@index')->middleware('auth'); //responses
Route::get('/add','JobResponseController@upload')->middleware('auth');//response
Route::get('/resume/{id}','JobResponseController@show')->middleware('auth');//response
Route::get('/resume/edit/{id}','JobResponseController@edit')->name('response.edit')->middleware('admin');//response
Route::post('/resume/update/{id}','JobResponseController@update')->name('response.update')->middleware('auth');//response

Route::post('/response/status/{id}','JobResponseController@status')->name('response.status')->middleware('auth');
Route::get('/responses/delete/{id}','JobResponseController@destroy')->name('response.delete')->middleware('auth');
Route::post('/response','JobResponseController@store')->name('uploadresume')->middleware('auth');
Route::get('/responses/download/{id}','JobResponseController@show')->name('downloadresume')->middleware('auth');


Route::get('/jobapply/{id}','JobController@show')->name('job'); //Shareable URL
Route::post('/jobapply','JobApplyController@store')->name('applyjob');

Route::get('/jobapplications','JobApplyController@index')->middleware('auth');
Route::get('/jobapply/view/{id}','JobApplyController@show')->name('jobapply')->middleware('auth');
Route::get('/jobapply/delete/{id}','JobApplyController@destroy')->name('job.delete')->middleware('auth');
Route::post('/jobapply/status/{id}','JobApplyController@status')->name('jobapply.status')->middleware('auth');

Route::get('/users','DashboardController@userServerData')->middleware('auth');


Auth::routes();

Route::get('login/{provider}', 'AuthController@redirectToProvider');
Route::get('{provider}/callback', 'AuthController@handleProviderCallback');

Route::get('server-side', 'JobResponseController@getServerSide')->name('server.side.index');
Route::get('jobserverside', 'JobController@getServerSide')->name('jobs.server');
Route::get('appliedjobserverside', 'JobApplyController@getServerSide')->name('appliedjobs.server');

Route::get('usersdata', 'DashboardController@userServerData')->name('userServerData.server');
