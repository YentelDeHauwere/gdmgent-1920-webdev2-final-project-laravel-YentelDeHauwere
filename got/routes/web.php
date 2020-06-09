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


Route::get('/', 'PageController@home')->name('home');

Route::get('/', 'MailController@getContact')->name('contact');
Route::post('/', 'MailController@postContact')->name('contact.save');

Route::get('/', 'NewsletterController@getEmail')->name('mail');
Route::post('/', 'NewsletterController@postEmail')->name('mail.save');


Route::get('/blogs', 'PageController@blogs')->name('blogs');
Route::get('/donate', 'PageController@donate')->name('donate');

Route::prefix('dashboard')->as('dashboard.')->group(function() {

	Route::get('/pages', 'DashboardController@getIndexPages')->name('pages.index');
	Route::get('/pages/create', 'DashboardController@getCreatePage')->name('pages.create');
	Route::post('/pages/create', 'DashboardController@postCreatePage')->name('pages.create.post');
	Route::get('/pages/edit/{page}', 'DashboardController@getEditPage')->name('pages.edit');
	Route::post('/pages/edit/{page}', 'DashboardController@postEditPage')->name('pages.edit.post');
	Route::get('/pages/delete/{id}', 'DashboardController@getDeletePage')->name('pages.delete');
});

Route::get('/{slug}', 'PagesController@getPage')->name('page');