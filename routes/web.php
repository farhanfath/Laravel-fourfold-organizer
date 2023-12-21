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

Route::get('/video', function () {
    return view('/video-page/video');
});

Route::get('/gallery', function () {
    return view('/gallery/gallery');
});

Route::get('/details', function () {
    return view('/event/details');
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


