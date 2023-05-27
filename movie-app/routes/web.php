<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
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
    return view('index');
});



Route::get('/genres', function () {
    return view('genres/index');
});

Route::get('/reviews', function () {
    return view('reviews/index');
});

Route::get('/users', function () {
    return view('users/index');
});

Route::get('/movies',[MovieController::class, 'index']); 

Route::get('/genres',[GenreController::class, 'index']);

Route::get('/movies',[ReviewController::class, 'index']);


