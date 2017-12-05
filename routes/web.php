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

Route::get('/', 'PagesController@home');

Route::get('/courses', 'PagesController@courses');

Route::get('/teachers', 'PagesController@teachers');

Route::get('/events', 'PagesController@events');

Route::get('/about', 'PagesController@about');

Route::get('/course-single', 'PagesController@courseSingle');

Route::get('/gallery', 'PagesController@gallery');

Route::get('/news', 'PagesController@news');

// Route::get('/contacts', 'PagesController@contacts');

Route::resource('contact','ContactsController');