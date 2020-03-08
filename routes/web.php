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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('verified')->group(function () {
 // Put protected routes here
});

// In controller you can call the verified middleware in the constructor
// public function __construct()
// {
//  $this->middleware(['auth', 'verified']);
// }

Route::resource('questions', 'QuestionsController');