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
Route::get('/private-events', 'PrivateEventsController@index')->name('private-events.index');
Route::get('/special-events', 'SpecialEventsController@index')->name('special-events.index');

Route::resource('cocktails', 'CocktailsController');
Route::resource('desserts', 'DessertsController');
Route::resource('dinner', 'DinnerController');
Route::resource('lounge', 'LoungeController');
Route::resource('administrator', 'AdminController');

Route::get('/admin/cocktails', 'CocktailsController@cocktails')->name('cocktails-list');
Route::post('/admin/cocktails-order','CocktailsController@updateOrder');

Route::get('/admin/desserts', 'DessertsController@desserts')->name('desserts-list');
Route::post('/admin/desserts-order','DessertsController@updateOrder');

Route::get('/admin/dinner', 'DinnerController@dinner')->name('dinner-list');
Route::post('/admin/dinner-order','DinnerController@updateOrder');

Auth::routes();
