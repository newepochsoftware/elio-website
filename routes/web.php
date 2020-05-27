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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about-us', 'AboutController@index')->name('about');
Route::get('/gallery', 'GalleryController@index')->name('gallery');
Route::get('/reservations', 'ReservationController@index')->name('reservations');
Route::get('/private-events', 'PrivateEventsController@index')->name('private-events');

Route::resource('cocktails', 'CocktailsController');
Route::resource('desserts', 'DessertsController');
Route::resource('dinner', 'DinnerController');
Route::resource('lounge', 'LoungeController');


Auth::routes();
