<?php

use Illuminate\Support\Facades\Route;
Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localize', 'localizationRedirect' ]
],function(){
    Route::get('/', 'HomeController@index');
    Route::get('/about', function () {return view('pages.about');});
    Route::get('/service', function () {return view('pages.service');});
    Route::get('/contact', function () {return view('pages.contact');});
    Route::get('/legacy', function () {return view('pages.legacy');});
    Route::get('/projects', 'HomeController@projects');
    Route::get('/consultants', 'HomeController@consultants');
    Route::get('/partner', 'HomeController@partner');
    Route::get('/sitemap', 'HomeController@sitemap');
    Route::get('/faq', 'HomeController@faq');
    Route::get('/gallery', 'HomeController@gallery');
    Route::get('/gallery-images/{gallery}', 'HomeController@galleryImages');
    Route::get('/news', 'HomeController@news');
    Route::get('/news/{news}', 'HomeController@singleNews');
    Route::post('/comment', 'HomeController@comment');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'backend','middleware' => ['can:backend']], function () {
    Route::get('/', function () {return view('admin.index');});
    Route::resource('role', 'RoleController');
    Route::get('role/destroy/{id}', 'RoleController@destroy');
    Route::resource('permission', 'Admin\PermissionController');
    Route::get('permission/destroy/{id}', 'Admin\PermissionController@destroy');
    Route::resource('category', 'Admin\CategoryController');
    Route::get('category/destroy/{id}', 'Admin\CategoryController@destroy');
    Route::resource('news', 'Admin\NewsController');
    Route::get('news/destroy/{id}', 'Admin\NewsController@destroy');
    Route::resource('faq', 'Admin\FaqController');
    Route::get('faq/destroy/{id}', 'Admin\FaqController@destroy');
    Route::resource('project', 'Admin\ProjectController');
    Route::get('project/destroy/{id}', 'Admin\ProjectController@destroy');
    Route::resource('partner', 'Admin\PartnerController');
    Route::get('partner/destroy/{id}', 'Admin\PartnerController@destroy');
    Route::resource('consultant', 'Admin\ConsultantController');
    Route::get('consultant/destroy/{id}', 'Admin\ConsultantController@destroy');
    Route::resource('gallery', 'Admin\GalleryController');
    Route::get('gallery/destroy/{id}', 'Admin\GalleryController@destroy');
    Route::resource('gallery-images', 'Admin\GalleryImagesController');
    Route::get('gallery-images/destroy/{id}', 'Admin\GalleryImagesController@destroy');
    Route::resource('user', 'Admin\UserController')->except(['show', 'destroy']);
    Route::resource('comment', 'Admin\CommentController');
});