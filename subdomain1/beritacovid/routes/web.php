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

Route::get('/home', 'App\Http\Controllers\BeritaController@home');
Route::get('/home/profile', 'App\Http\Controllers\BeritaController@profile');
Route::get('/home/calculator', 'App\Http\Controllers\BeritaController@calculator');
Route::get('/home/table', 'App\Http\Controllers\BeritaController@table');
Route::get('/admin', 'App\Http\Controllers\AdminController@admin');
Route::get('/create', 'App\Http\Controllers\AdminController@create')->name('create.index');
Route::post('/create', 'App\Http\Controllers\BeritaController@store')->name('create.store');
