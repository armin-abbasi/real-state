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
    return view('property.index');
});

Route::post('auth/login', 'UserController@login');
Route::get('login', function() {
    return view('auth.login');
})->name('login');

Route::get('property', 'PropertyController@index')->name('property_list');
Route::get('property/create', 'PropertyController@create')->name('property_create');
