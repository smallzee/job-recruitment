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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/recruitment/{job}', "MyController@recruitment")->name('recruitment');
Route::get('/job-recruitment', "MyController@job_recruitment")->name('job_recruitment');
Route::post('/create_recruitment', "MyController@create_recruitment")->name('create_recruitment');


// admin route
Route::group(['namespace'=>'admin','prefix'=>'admin'], function (){
    Route::resource('/', "LoginController");
    Route::get('/dashboard', "AdminController@dashboard")->name('dashboard');

    Route::get('/admin', "AdminController@admin")->name('admin');
    Route::get('/create-admin', "AdminController@create_admin")->name('create_admin');

    Route::get('/edit-admin/{user}', "AdminController@edit_admin")->name('edit_admin');

    Route::get('/create-job-recruitment', "AdminController@create_job_recruitment")->name('create_job_recruitment');
    Route::get('/job-recruitment', "AdminController@job_recruitment")->name('job_recruitment');

    Route::post('/create_job', "AdminController@create_job")->name('create_job');
    Route::get('/edit-job-recruitment/{job}', "AdminController@edit_job_recruitment")->name('edit_job_recruitment');
    Route::get('/view-application/{user}', "AdminController@view_application")->name('view_application');

    Route::get('/recruitment', "AdminController@recruitment")->name('recruitment');
    Route::get('/application', "AdminController@application")->name('application');
    Route::post('/update_job', "AdminController@update_job")->name('update_job');

    Route::post('/create_new_admin', "AdminController@create_new_admin")->name('create_new_admin');
    Route::post('/update_admin', "AdminController@update_admin")->name('update_admin');


    // logout
    Route::get('/logout', "AdminController@logout")->name('logout');
});