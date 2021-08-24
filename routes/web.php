<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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
    return view('index');
});

Route::get('/pencarian', function(){
    return view('pencarian');
});

Route::get('/alasanditolak', function(){
    return view('alasanditolak');
});

Route::get('/bansoskabupaten', function(){
    return view('bansoskabupaten');
});

Route::get('/bansoskecamatan', function(){
    return view('bansoskecamatan');
});

Route::get('/bansoskelurahan', function(){
    return view('bansoskelurahan');
});

Route::get('/alurbansos', function(){
    return view('alurbansos');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
