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

Route::get('/', "FrontController@index");

// Route::view('/layout', 'layouts.master');
// Route::view('/layout/content', 'contenta');
// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/create', 'UserController@create');
Route::post('user/save', 'UserController@save');

//Route for front end
Route::get('/fashion', "FrontController@fashion");
Route::get('/foodAndDrink', "FrontController@foodAndDrink");
Route::get('/electronic', "FrontController@electronic");
Route::get('/brand', "FrontController@brand");
Route::get('/details/{id}', "FrontController@details");
Route::get('/brandDetails/{id}', "FrontController@brandDetails");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
