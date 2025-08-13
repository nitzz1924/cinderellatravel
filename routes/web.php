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
    Route::get('/', 'home')->name('home'); // Override default welcome route
    Route::get('/about', 'about')->name('about'); // About page route
    Route::get('/services', 'services')->name('services'); // Services page route
    Route::get('/contact', 'contact')->name('contact'); // Contact page route
});
