<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/homepage/home');
});

Route::get('/old', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/gallery', function () {
    return view('/gallery/gallery');
});

// event - details

Route::get('/details-concert', function () {
    return view('/event/concert-details');
});

Route::get('/details-party', function () {
    return view('/event/party-details');
});

Route::get('/details-workshop', function () {
    return view('/event/workshop-details');
});

Route::get('/details-wedding', function () {
    return view('/event/wedding-details');
});


// gallery - details

Route::get('/party', function () {
    return view('/gallery/party');
});

Route::get('/workshop', function () {
    return view('/gallery/workshop');
});

Route::get('/festival', function () {
    return view('/gallery/festival');
});

Route::get('/concert', function () {
    return view('/gallery/concert');
});

Route::get('/wedding', function () {
    return view('/gallery/wedding');
});

Route::get('/night', function () {
    return view('/gallery/night');
});


