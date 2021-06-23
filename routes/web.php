<?php

use App\Http\Controllers\CarousselController;
use App\Http\Controllers\CarousselItemController;
use App\Http\Controllers\HeaderController;
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

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::resource("header",HeaderController::class);
Route::resource("caroussel",CarousselController::class);
Route::resource("caroussel_items",CarousselItemController::class);