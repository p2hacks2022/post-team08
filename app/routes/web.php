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

Route::get('/', function () {
    return view('home');
});
// Route::get('/future', function () {
//     return view('future');
// });
Route::get('/index', function () {
    return view('index');
});
// Route::get('/starpulldown', function () {
//     return view('starpulldown');
// });

Route::get('/future','App\Http\Controllers\FutureController@get_mail');
Route::get('/starpulldown','App\Http\Controllers\FutureController@get_my_diary');

Route::post('/welcome', 'App\Http\Controllers\FutureController@post');
Route::post('/savestar', 'App\Http\Controllers\FutureController@sample_update_star');
