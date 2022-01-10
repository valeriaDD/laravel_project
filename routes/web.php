<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;


use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;


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

// Home Page
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

//Blog Page
Route::get('/blog', [BlogController::class, 'index'])->name('noutati');

//Article Page
Route::get('/blog/{id}', 'App\Http\Controllers\ArticleController@show')->name('article');

//Services Page
Route::get('/services', 'App\Http\Controllers\ServicesController@index')->name('services');

//Services Page with a specific service displayed
Route::get('/services/{id}', 'App\Http\Controllers\ServicesController@show_product')->name('services_id');

//Contact Page
Route::get('/contacts', 'App\Http\Controllers\ContactsController@index')->name('contacts');
Route::post('/contactUs', 'App\Http\Controllers\ContactsController@send')->name('contacts.send');

//Appointment Page
Route::get('/appointment', 'App\Http\Controllers\AppointmentController@index')->name('appointment');

