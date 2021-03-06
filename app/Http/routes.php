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
    Route::resource('admin/contacts', 'ContactsController');
    Route::resource('admin/orders', 'OrdersController');
    Route::get('admin/export/{content}', 'AdminController@export');
});

#Frontend Routes

#landing
Route::get('landingpage/{page}', 'FrontendController@landing');


Route::post('create-order', 'FrontendController@createOrder');
Route::post('save-contact', 'FrontendController@saveContact');
Route::get('/', 'FrontendController@index');
Route::get('lien-he', 'FrontendController@contact');
Route::get('video/{value?}', 'FrontendController@video');
Route::get('phan-phoi/{value?}', 'FrontendController@delivery');
Route::post('save_question', 'FrontendController@saveQuestion');
Route::get('tu-khoa/{value}', 'FrontendController@tag');
Route::get('search', 'FrontendController@search');
Route::get('san-pham/{value?}', 'FrontendController@product');
Route::get('hoi-dap/{value?}', 'FrontendController@question');
Route::get('{value}', 'FrontendController@main');