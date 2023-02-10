<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\TempController@index')->name('home');
Route::get('/temperature', 'App\Http\Controllers\TempController@temperature')->name("temperature");
