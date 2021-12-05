<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;



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


// Send Contact 
Route::get('/', 'App\Http\Controllers\contactController@sendContact');

// Show Controller
Route::get('/contact', 'App\Http\Controllers\contactController@showContact' );
