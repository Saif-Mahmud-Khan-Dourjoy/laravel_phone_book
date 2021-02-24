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

//del
Route::get('/all_del/{id}', 'NumberController@all_del')->name('all_del');
Route::get('/single_del/{id}', 'NumberController@single_del')->name('single_del');

//update

Route::post('/update_info/{id}', 'InfoController@form_update')->name('form_update');
Route::post('/number_update/{id}', 'NumberController@number_update')->name('number_update');

//add_new_number

Route::post('/add_new_number/{id}', 'NumberController@add_new_number')->name('add_new_number');

