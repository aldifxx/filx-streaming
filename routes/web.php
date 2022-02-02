<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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
    return view('home');
});

Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@verify_data');

Route::get('/login', 'LoginController@index')->name('login')->middleware('guest');
Route::post('/login', 'LoginController@authenticate');
Route::post('/logout', 'LoginController@logout');

Route::get('/app', 'DashboardController@index')->middleware('auth');
Route::get('/search', 'SearchController@index')->middleware('auth');
Route::get('/movies', 'MoviesController@index')->middleware('auth');
Route::get('/movies/{movies}/{slug}', 'MoviesController@show');

Route::get('/upcoming', 'UpcomingController@index')->middleware('auth');

Route::get('/watch', 'WatchController@index')->middleware('auth');
Route::get('/watch/{movies}/{slug}', 'WatchController@show');

// Payment Started
Route::get('/payment', 'PaymentController@index');
Route::post('/payment', 'PaymentController@verify_data');

// Success Payment

Route::get('/success', 'SuccessPaymentController@index');
