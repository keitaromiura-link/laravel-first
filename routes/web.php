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

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('foo', function () {
    return 'Hello World';
});

Route::view('/welcom', 'welcome');

Route::get('user/{name}', 'UserController@show')->where('name', '[A-Za-z]+');

Route::get('top', function () {
    return redirect()->route('index');
});

Route::resource('admins', 'AdminController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
