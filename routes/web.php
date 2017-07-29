<?php

use App\Task;
use Illuminate\Http\Request;
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

/**
 * home
 */
Route::get('/', 'postController@index')->name('home');

/**
 *  	Profile
 */
Route::get('/profile', 'profileController@index')->name('profile');
Route::get('/profile/{user}', 'profileController@show');
Route::post('/profile/update', 'profileController@edit');

/**
 *  	Friends
 */
Route::get('/friends', 'friendController@show');
Route::get('/friends/add/{user}', 'friendController@add');
Route::get('/friends/confirm/{user}', 'friendController@confirm');
Route::get('/friends/delete/{user}', 'friendController@destroy');
/**
 *  	Posts
 */
Route::post('/posts/new', 'postController@store');
Route::post('/posts/{id}/delete', 'postController@destroy');

/**
 *  	Comments
 */
Route::post('/comments/{post}/new', 'commentController@store');
Route::post('/comments/{post}/delete', 'commentController@destroy');
/**
 * 		Sessions
 */
Route::get('/register', 'registerController@create')->name('register');
Route::post('/register/new', 'registerController@store');

Route::get('/login', 'sessionController@create');
Route::post('/login', 'sessionController@store');
Route::get('/logout', 'sessionController@destroy');

/**
 *  	Search
 */
Route::get('/search', 'searchController@index');