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

// Deze regel moet boven
Auth::routes();

Route::name('webhooks.mollie')->post('webhooks/mollie', 'WebHookController@handle');

Route::get('/', 'PageController@home')->name('home');

Route::get('/', 'MailController@getContact')->name('contact');
Route::post('/', 'MailController@postContact')->name('contact.save');

Route::get('/', 'NewsletterController@getEmail')->name('mail');
Route::post('/', 'NewsletterController@postEmail')->name('mail.save');


Route::get('/blogs', 'PageController@blogs')->name('blogs');
Route::get('/blogs/detail/{blog}', 'PageController@blogDetail')->name('blogs.detail');



Route::prefix('donate')->as('donate.')->group(function() {
	Route::get('/', 'DonationController@getIndex')->name('index');
	Route::post('/', 'DonationController@postDonate')->name('donate');

	Route::get('/checkout', 'DonationController@getCheckout')->name('checkout');
	Route::get('/succes', 'DonationController@getSucces')->name('succes');
});

Route::prefix('dashboard')->as('dashboard.')->group(function() {

	Route::get('/pages', 'DashboardController@getIndexPages')->name('pages.index');
	Route::get('/pages/create', 'DashboardController@getCreatePage')->name('pages.create');
	Route::post('/pages/create', 'DashboardController@postCreatePage')->name('pages.create.post');
	Route::get('/pages/edit/{page}', 'DashboardController@getEditPage')->name('pages.edit');
	Route::post('/pages/edit/{page}', 'DashboardController@postEditPage')->name('pages.edit.post');
	Route::get('/pages/delete/{id}', 'DashboardController@getDeletePage')->name('pages.delete');

	Route::get('/blogs', 'BlogController@getIndexBlogs')->name('blogs.index');
	Route::get('/blogs/create', 'BlogController@getCreateBlog')->name('blogs.create');
	Route::post('/blogs/create', 'BlogController@postCreateBlog')->name('blogs.create.post');
	Route::get('/blogs/edit/{blog}', 'BlogController@getEditBlog')->name('blogs.edit');
	Route::post('/blogs/edit/{blog}', 'BlogController@postEditBlog')->name('blogs.edit.post');
	Route::get('/blogs/delete/{id}', 'BlogController@getDeleteBlog')->name('blogs.delete');
});

Route::get('/{slug}', 'PagesController@getPage')->name('page');

Route::get('/home', 'HomeController@index')->name('home');
