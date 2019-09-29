<?php

use App\Facades\Route;

Route::get('/', '\App\Http\Controllers\WelcomeController:index');

Route::get('/demo1', '\App\Http\Controllers\WelcomeController:demo1');
Route::get('/demo2', '\App\Http\Controllers\WelcomeController:demo2');