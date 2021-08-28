<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\GH;

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
    return redirect('/error');
});


Route::get('/s', function () {
    return view('second');
});
Route::get('/f', function () {
    return view('final');
});

Route::get('/registration','App\Http\Controllers\GH@registration');

Route::get('/error','App\Http\Controllers\GH@error');
Route::get('/first','App\Http\Controllers\GH@first');
Route::get('/finalprev','App\Http\Controllers\GH@finalprev');

Route::post('/first','App\Http\Controllers\GH@first');

Route::post('/second','App\Http\Controllers\GH@second');


