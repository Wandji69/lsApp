<?php
use Illuminate\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/{$id}/{$name}', function () {
    return view 'This is user' .$name 'with id' .$id;
});
Route::get('/hybrid', 'PagesController@hybrid');


*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
