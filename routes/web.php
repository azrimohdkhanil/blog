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
/*
//Authentication route
Route::get('auth/login','Auth\LoginController@showLoginForm');
Route::post('auth/login','Auth\LoginController@login');
Route::post('auth/logout','Auth\LoginController@logout');

//Registration route
Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('auth/register', 'Auth\RegisterController@register');*/

// Authentication routes



Route::get('blog','BlogController@getIndex')->name('blog.index');

Route::get('blog/{slug}','BlogController@getSingle')->name('blog.single')->where('slug','[\w\d\-\_]+');
Auth::routes();


//or 
//Route::get('blog/{slug}',['as' => 'blog.single', 'uses' => 'BlogController@getSingle']);

Route::get('contact','PagesController@getContact')->name('contact');

Route::get('about', 'PagesController@getAbout');

Route::get('/', 'PagesController@getIndex');
Route::get('/home', 'HomeController@index');


Route::resource('posts','PostController');




