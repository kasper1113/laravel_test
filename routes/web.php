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


Route::group(['middleware' => ['web']], function (){
    Route::get('/',  'PagesController@getIndex');
    Route::get('about',  'PagesController@getAbout');
    Route::get('contact',  'PagesController@getContact');
    Route::get('/hello', 'HelloController@hello');
    Route::get('/hello2/{count}', 'HelloController@hello2');
    Route::resource('/posts' , 'PostController');
    Route::get('login',  'PagesController@getLogin');
    Route::get('register',  'PagesController@getRegister');
    Route::get('logout', 'PagesController@logout');
    
    
    
    Auth::routes();
    
    Route::get('/home', 'HomeController@index')->name('home');
    
});