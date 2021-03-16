<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/register', 'AuthController@getregister')->name('register')->middleware('guest');
Route::post('/register', 'AuthController@postregister')->middleware('guest');
Route::get('/login', 'AuthController@getLogin')->middleware('guest')->name('login');
Route::post('/login', 'AuthController@postLogin')->middleware('guest');

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');
Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');

//shorten
Route::get('/shortens', 'ShortensController@index')->middleware('auth');
Route::get('/shortens/create', 'ShortensController@create')->middleware('auth');
Route::post('/shortens', 'ShortensController@store');
Route::get('/{randomLink}', 'ShortensController@fetch');
Route::get('/shortens/{shorten:random}/edit', 'ShortensController@edit');
Route::get('/shortens/{shorten:random}', 'ShortensController@show');
Route::put('/shortens/{shorten:random}', 'ShortensController@update');
Route::delete('/shortens/{shorten}', 'ShortensController@destroy');

Route::post('/shortens/{shorten}/download', 'ShortensController@download');
