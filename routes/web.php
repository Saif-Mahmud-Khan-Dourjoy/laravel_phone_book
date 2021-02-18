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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//info
Route::get('/add_info', 'InfoController@index')->name('form_index');
Route::post('/add_info', 'InfoController@store')->name('form_add');

Route::get('/single_view/{id}', 'NumberController@index')->name('single_view');

Route::get('/add_new_con/{id}', 'NumberController@show')->name('add_new_con');



Route::post('/new_con_store/{id}', 'NumberController@store')->name('new_con_store');

