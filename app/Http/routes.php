<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('restricted', function(){
    return view('errors.restricted');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

#Admin Routes.

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/admin', 'HomeController@index');
    Route::resource('admin/posts', 'PostsController');
    Route::resource('admin/categories', 'CategoriesController');
    Route::resource('admin/settings', 'SettingsController');
    Route::resource('admin/questions', 'QuestionsController');
    Route::resource('admin/videos', 'VideosController');
    Route::resource('admin/tags', 'TagsController');
    Route::resource('admin/products', 'ProductsController');
    Route::resource('admin/deliveries', 'DeliveriesController');
    Route::resource('admin/banners', 'BannersController');
});

#Frontend Routes

Route::get('/', 'FrontendController@index');


Route::get('lien-he', 'FrontendController@contact');

Route::get('video/{value?}', 'FrontendController@video');

Route::get('phan-phoi/{value?}', 'FrontendController@delivery');

Route::post('save_question', 'FrontendController@saveQuestion');

Route::get('tag/{value}', 'FrontendController@tag');

Route::get('search', 'FrontendController@search');

Route::get('product', 'FrontendController@product');

Route::get('cau-hoi-thuong-gap/{value?}', 'FrontendController@question');

Route::get('{value}', 'FrontendController@main');