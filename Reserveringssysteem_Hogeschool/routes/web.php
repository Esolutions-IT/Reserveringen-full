<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/accept/{id}', 'HomeController@accept')->name('accept');

Route::get('/delete/{id}', 'HomeController@destroy')->name('delete');

Route::get('/reserveringen', 'ReserveringenController@index')->name('reserveringen');

Route::get('/reserveringen/toevoegen', 'ReserveringenController@toevoegen')->name('reserveringen_toevoegen');
Route::post('/reserveringen/toevoegen/add', 'ReserveringenController@toevoegendb')->name('toevoegen');

Route::get('/klanten', 'KlantenController@index')->name('klanten');

Route::get('klanten_pdf', 'KlantenController@klantpdf')->name('klanten_pdf');
Route::post('/klanten_pdf/pdf/{id}', 'KlantenController@pdf');

Route::get('/klant/delete/{id}', 'KlantenController@destroy')->name('klant_delete');

Route::post('/reserveringen/edit', 'ReserveringenController@edit_r')->name('klant_r');
