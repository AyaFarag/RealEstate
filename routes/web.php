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

Route::get('/', function(){
    return redirect('/home');
});

// admin panel 
Route::resource('admin', 'AdminController')->middleware('Admin:admin');
// admin login
Route::get('/admin/create', 'AdminController@create');
Route::post('/admin/login', 'AdminController@login');

Route::resource('slider', 'SliderController');
Route::resource('about', 'AboutController');
Route::resource('whatWeDo', 'WhatWeDoController');
Route::resource('fields', 'FieldController');
Route::resource('ourwork', 'OurWorkController');
Route::resource('services', 'ServiceController');
Route::resource('type', 'CourseTypeController');
Route::resource('courses', 'CoursesController');
Route::resource('team', 'TeamController');
Route::resource('contactus', 'ContactUsController');
Route::resource('branches', 'BranchController');
Route::resource('contactsform', 'ContactFormController');
Route::resource('subscribers', 'SubscriberController');
Route::resource('/home', 'WebsiteController');
Route::get('all/courses', 'WebsiteController@create');
Route::resource('courseslider', 'CourseSliderController');
Route::resource('aboutcourses', 'AboutcoursesController');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
