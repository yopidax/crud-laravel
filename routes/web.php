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

Route::get('/task', 'TasksController@index');
Route::post('/task/create', 'TasksController@create');
Route::delete('/task/delete/{task}', 'TasksController@delete');

Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/show/{id}', 'ArticlesController@show');
