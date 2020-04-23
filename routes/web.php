<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Film;

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


Route::get('/films', function () {
    return view('cartaz');
});


Route::post('/film', function () {
    return view('createfilm');
});


Route::get('/film/{id}', function () {
    return view('film');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/bilhetes', function () {
    return view('bilhetes');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/brevemente', function () {
    return view('brevemente');
});

Route::get('/logout', function () {
    Auth::logout();
    return view('home');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
