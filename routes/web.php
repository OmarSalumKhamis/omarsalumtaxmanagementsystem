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

Route::view("About", 'About');
Route::view("Contact", 'Contact');
Route::view("Log in", 'Log in');
Route::view("Registration", 'Registration');
Route::view("dashboard", 'dashboard');
