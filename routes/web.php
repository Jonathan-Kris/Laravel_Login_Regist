<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login',  [LoginController::class, "index"]);
Route::post('/login',  [LoginController::class, "login"]);

Route::get('/auth/google/redirect', [GoogleAuthController::class, "redirectToGoogle"]);
Route::get('/auth/google/callback', [GoogleAuthController::class, "handleGoogleCallback"]);

Route::get('/register', [RegisterController::class, "index"]);
Route::post('/api/register', [RegisterController::class, "val_and_store"]);