<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarousselController;
use App\Http\Controllers\CarousselItemController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TestimonialItemController;
use App\Models\About;
use App\Models\Caroussel;
use App\Models\CarousselItem;
use App\Models\Header;
use App\Models\Testimonial;
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
    $header=Header::first();
    $caroussel=Caroussel::first();
    $carousselItems=CarousselItem::all();
    $about=About::first();
    $testimonial=Testimonial::first();
    return view('home', compact("header", "caroussel", "carousselItems", "about", "testimonial"));
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
Route::resource("testimonial",TestimonialController::class);
Route::resource("testimonial_items",TestimonialItemController::class);
Route::resource("about",AboutController::class);