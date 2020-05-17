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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/us','CountryController@unitedStates')->name('us');
Route::get('/uk','CountryController@unitedKingdom')->name('uk');
Route::get('/germany','CountryController@germany')->name('germany');
Route::get('/canada','CountryController@canada')->name('canada');
Route::get('/nz','CountryController@Newzealand')->name('nz');
