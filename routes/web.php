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

Route::get('/', 'WelcomeController@index');
Route::resource('portfolio/{portfolio}', 'PortfolioController');
//Route::get('portfolio/{portfolio}', 'PortfolioController@show')->name('portfolio.show');

Auth::routes();

Route::middleware('auth')->group(function ()
{
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('categories','CategoriesController');
Route::resource('posts','PostController');
Route::get('trashed-posts','PostController@trashed')->name('trashed-posts.index');
Route::put('restore-posts/{post}','PostController@restore')->name('restore-posts');
});
