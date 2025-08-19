<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Frontend routes
Route::controller(WebsiteController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/aboutus', 'aboutus')->name('aboutus');
    Route::get('/careers', 'careers')->name('careers');
    Route::get('/contactus', 'contactus')->name('contactus');
    Route::get('/blogs', 'blogs')->name('blogs');
    Route::get('/blogdetail', 'blogdetail')->name('blogdetail');
    Route::get('/demo', 'demo')->name('demo');

    // destination routes
    Route::get('/destinations/europe', 'europe')->name('europe');

    // services routes
    Route::get('/services/airticketing', 'airticketing')->name('airticketing');
    Route::get('/services/travelvisa', 'travelvisa')->name('travelvisa');
    Route::get('/services/travelinsurance', 'travelinsurance')->name('travelinsurance');
    Route::get('/services/hotelbooking', 'hotelbooking')->name('hotelbooking');
    Route::get('/services/holidaypackges', 'holidaypackges')->name('holidaypackges');
});
