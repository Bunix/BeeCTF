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

/** User Routes **/

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/challenges', 'ChallengesController@indexUser');

/** Admin Routes **/

Route::get('/admin', 'HomeController@admin')
	->middleware('is_admin')
	->name('admin');

Route::get('admin/challenges', 'ChallengesController@indexAdmin', function () {
    return view('admin.challenges');
})->name('adminchallenges');

Route::get('admin/new_challenge', function () {
    return view('admin.challenges_new');
})->name('adminchallengesnew');


