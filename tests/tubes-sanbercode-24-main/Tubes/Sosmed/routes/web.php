<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostinganController;
use App\Http\Controllers\FollowController;

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
//     return view('index');
// });
Route::resource('user', UserController::class);
Route::get('/', [UserController::class, 'index']);
Route::post('/store', [UserController::class, 'store']);
Route::post('/index', [UserController::class, 'login']);
Route::post('/post', [PostinganController::class, 'insertPost']);
Route::post('/komen', [PostinganController::class, 'insertKomen']);
Route::post('/like', [PostinganController::class, 'insertLike']);
Route::post('/follow', [FollowController::class, 'isFollow']);
Route::get('/home/{id}', [UserController::class, 'Cookies']);
Route::post('/edit', [UserController::class, 'apaajabebas']);
Route::get('/edit/{id}', [UserController::class, 'update']);
Route::post('/editProfile', [UserController::class, 'editProfile']);

// Route::get('/edit', function () {
    // return view('edit');
// });
