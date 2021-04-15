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

Route::get('/', ['as'=>'home', 'uses'=>'PostController@index']);
Route::get('/home', ['as'=>'home', 'uses'=>'PostController@index']);

Route::get('/view/{post}', ['as'=>'view', 'uses'=>'PostController@view']);

Route::get('/edit/{post}', ['as'=>'edit', 'uses'=>'PostController@edit']);
Route::post('/edit/{post}', ['as'=>'edit', 'uses'=>'PostController@update']);

Route::get('/delete/{post}', ['as'=>'delete', 'uses'=>'PostController@delete']);

Route::get('/add', ['as'=>'add', 'uses'=>'PostController@add']);
Route::post('/add', ['as'=>'add', 'uses'=>'PostController@insert']);