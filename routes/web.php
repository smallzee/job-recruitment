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

Route::get('/recruitment/{recruitment}', "MyController@recruitment")->name('recruitment');
Route::get('/job-recruitment', "MyController@job_recruitment")->name('job_recruitment');

// admin route
Route::group(['namespace'=>'admin','prefix'=>'admin'], function (){
    Route::resource('/', "LoginController");
    Route::get('/dashboard', "AdminController@dashboard")->name('dashboard');
    Route::get('/admin', "AdminController@admin")->name('admin');
    Route::get('/create-admin', "AdminController@create_admin")->name('create_admin');

    Route::get('/edit-admin/{user}', "AdminController@edit_admin")->name('edit_admin');

    Route::post('/create_new_admin', "AdminController@create_new_admin")->name('create_new_admin');
    Route::post('/update_admin', "AdminController@update_admin")->name('update_admin');

});