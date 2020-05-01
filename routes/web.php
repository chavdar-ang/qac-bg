<?php

use Illuminate\Support\Facades\Route;

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

// Route::post('submit', function () {
//     dd(request()->all());
// });

Route::post('submit', 'ContactFormController@store')->name('contacts.store');

Route::get('/', 'HomepageController@index')->name('home');

Route::get('contacts', 'ContactPageController@show')->name('contacts.show');

Route::get('blog', 'PostController@index')->name('posts.index');
Route::get('blog/{slug}', 'PostController@show')->name('posts.show');
Route::get('blog/topic/{slug}', 'TopicController@show')->name('topics.show');
