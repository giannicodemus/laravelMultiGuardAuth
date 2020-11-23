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




Route::get('/login', 'UsersController@login')->name('login');
Route::get('/admin/login', 'AdminsController@login')->name('admin.login');
Route::get('/client/login', 'ClientsController@login')->name('client.login');

Route::post('/login', 'UsersController@attempLogin');
Route::post('/admin/login', 'AdminsController@attempLogin');
Route::post('/client/login', 'ClientsController@attempLogin');

Route::prefix('/')->middleware('auth')->group(function(){
    Route::get('/home', 'UsersController@home')->name('home');
});

Route::prefix('/admin')->name('admin.')->middleware('auth:admin')->group(function(){
    Route::get('home', 'AdminsController@home')->name('home');
});

Route::prefix('/client')->name('client.')->middleware('auth:client')->group(function(){
    Route::get('home', 'ClientsController@home')->name('home');
});