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

Route::get('/fg', function () {
    return view('home.blog-details');
});


//////////Front-End\\\\\\\\\\\\\\\\
Route::group([
	'namespace' => 'Front_end',

], function (){
	Route::get('/', 'HomeController@index')->name('home');
	Route::get('about', 'AboutUsController@index')->name('about');
	Route::get('services', 'ServiceController@index')->name('services');
	Route::get('portfolio', 'PortfolioController@index')->name('portfolio');
	Route::get('portfolio', 'PortfolioController@index')->name('portfolio');
	/////////////Contacts\\\\\\\\\\\\\\\\\
	Route::get('contact-us', 'ContactController@index')->name('contact-us');
	Route::post('save-contacts', 'ContactController@create')->name('save-contacts');
	Route::get('blog-details', 'ContactController@index')->name('blog-details');
	Route::get('itsourcing', 'OutSourceController@index')->name('itsourcing');
});


////////////Back End\\\\\\\\\
Route::group([
	'namespace' => 'admin',
], function (){
	Route::get('admin', 'AdminController@index')->name('admin');
	//**********Contacts************\\
	Route::get('contacts', 'ContactUsController@index')->name('contacts');
	//**********Preferences************\\
	Route::match(['get','post'],'preferences', 'PreferenceController@index')->name('preferences');
	//**********news************\\
	Route::match(['get','post'],'news', 'NewsLetterController@index')->name('news');
	//**********Slider************\\
	Route::match(['get','post'],'add-slider', 'SliderController@addSlider')->name('add-slider');
	Route::match(['get','post'],'view-slider', 'SliderController@viewSlider')->name('view-slider');
	Route::match(['get','post'],'edit-slider/{id}','SliderController@editSlider')->name('edit-slider');
	Route::match(['get','post'],'delete-slider/{id}','SliderController@deleteSlider')->name('delete-slider');
	//*********Clients***********\\
	Route::match(['get','post'],'view-clients', 'ClientController@index')->name('view-clients');
	Route::match(['get','post'],'add-clients', 'ClientController@addClient')->name('add-clients');
	Route::match(['get','post'],'create-client', 'ClientController@create')->name('create-client');
	Route::match(['get','post'],'edit-client/{id}','ClientController@editClient')->name('edit-client');
	Route::match(['get','post'],'delete-client/{id}','ClientController@deleteClient')->name('delete-client');
	//*********Blog***************\\
	Route::match(['get','post'],'view-blog', 'BlogDetailController@show')->name('view-blog');
	Route::match(['get','post'],'blog', 'BlogDetailController@indexHome')->name('view-blog');
	Route::match(['get','post'],'blog-detail/{id}', 'BlogDetailController@blogDetails')->name('blog-details');
	Route::match(['get','post'],'add-blog', 'BlogDetailController@addBlog')->name('add-blog');
	Route::match(['get','post'],'delete-blog/{id}','BlogDetailController@deleteBlog')->name('delete-Blog');
	Route::match(['get','post'],'edit-blog/{id}','BlogDetailController@editBlog')->name('edit-blog');
	//**********Team************\\
	Route::match(['get','post'],'add-team', 'TeamMateController@addTeam')->name('add-team');
	Route::match(['get','post'],'view-team', 'TeamMateController@viewTeam')->name('view-team');
	Route::match(['get','post'],'edit-team/{id}','TeamMateController@editTeam')->name('edit-team');
	Route::match(['get','post'],'delete-team/{id}','TeamMateController@deleteTeam')->name('delete-team');
	Route::match(['get','post'],'delete-team/{id}','TeamMateController@deleteTeam')->name('delete-team');
	//*********Abou-Us***********\\
	Route::match(['get','post'],'about-us', 'TeamMateController@teamAbout')->name('about-us');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
