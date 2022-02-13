<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;


use App\Http\Controllers\BlogController;
use App\Http\Controllers\api\ArticleAPIController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\LogActivityMiddlewear;

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

//Services Page with a specific service displayed
Route::get('/services/{id}', 'App\Http\Controllers\ServicesController@show_product')->name('services_id');

//Contact Page
Route::get('/contacts', 'App\Http\Controllers\ContactsController@index')->name('contacts');
Route::post('/contactUs', 'App\Http\Controllers\ContactsController@send')->name('contacts.send')->middleware('log.activity:sendContacts');

//Appointment Page
Route::get('/appointments/{id}', 'App\Http\Controllers\AppointmentController@index')->name('appointment');
Route::post('/appointment/{id}/store', 'App\Http\Controllers\AppointmentController@store')->name('appointment.store');


// APIs
Route::put('/api/articles/{id}', 'App\Http\Controllers\api\ArticleAPIController@updateArticle');