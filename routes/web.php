<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin',           'AdminController@index');
Route::resource('users',      'UsersController');
Route::resource('roles',      'RolesController');
Route::resource('evaluators', 'EvaluatorsController');
Route::resource('quotes',     'QuotesController');

