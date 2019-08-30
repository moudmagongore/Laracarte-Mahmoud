<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

Route::get('/', [
	'as' => 'root_path',
	'uses' => 'PageController@home'
]);
	//oubien
/*Route::view('/', 'pages.home')->name('root_path');*/


use App\Mail\ContactMessageCreated;

Route::get('/', 'PageController@home')->name('root_path');

Route::get('/about', 'PageController@about')->name('about_path');

Route::get('/contact', 'ContactsController@create')->name('contact_path');

Route::post('/contact', 'ContactsController@store')->name('contact_path');


Auth::routes(['verify' => true]);

/*Route::get('/home', 'HomeController@index')->name('home');*/
