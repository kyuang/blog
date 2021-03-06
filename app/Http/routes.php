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
//前台
Route::any('/','IndexController@index');
Route::any('about','IndexController@about');
Route::any('news','IndexController@news');
Route::any('talk','IndexController@talk');
Route::any('learn','IndexController@learn');
Route::any('message','IndexController@message');





//后台
Route::any('adminadmin','admin\AdminController@index');

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

Route::group(['middleware' => ['web']], function () {
    //
});
