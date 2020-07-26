<?php

use Illuminate\Support\Facades\Route;
Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localize', 'localizationRedirect' ]
],function(){
	Route::get('/', function () {return view('pages.index');});
    Route::get('/about', function () {return view('pages.about');});
    Route::get('/service', function () {return view('pages.service');});
    Route::get('/partner', function () {return view('pages.partner');});
    Route::get('/contact', function () {return view('pages.contact');});
    Route::get('/project', function () {return view('pages.project');});
    Route::get('/sitemap', 'HomeController@sitemap');
    Route::get('/news', 'HomeController@news');
    Route::get('/news/{news}', 'HomeController@singleNews');
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
    Route::resource('user', 'Admin\UserController')->except(['show', 'destroy']);
});