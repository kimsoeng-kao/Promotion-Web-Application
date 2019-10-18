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

Route::prefix('backend')->group(function() {
    Route::get('/', 'DashboardController@index');
    Route::get('logout', 'UserController@logout');
    // route role
    Route::get('/user', 'UserController@index');
    Route::get('user/create', 'UserController@create');
    Route::post('user/save', 'UserController@save');
    Route::get('user/delete', 'UserController@delete');
    Route::get('user/edit', 'UserController@edit');
    Route::post('user/update', 'UserController@update');

    //Promotion routes
    Route::get('/promotion', 'PromotionController@index');

    Route::get('promotion/create', 'PromotionController@create');
    Route::post('promotion/save', 'PromotionController@save');

    Route::get('promotion/delete', 'PromotionController@delete');
    Route::get('promotion/details', 'PromotionController@details');

    Route::get('promotion/edit', 'PromotionController@edit');
    Route::post('promotion/update', 'PromotionController@update');

    // Category routes
    Route::get('/company', 'CompanyController@index');
    Route::get('company/create', 'CompanyController@create');
    Route::post('company/save', 'CompanyController@save');
    Route::get('company/delete', 'CompanyController@delete');
    Route::get('company/edit', 'CompanyController@edit');
    Route::post('company/update', 'CompanyController@update');
});
