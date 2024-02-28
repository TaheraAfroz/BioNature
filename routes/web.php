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
    return view('welcome');
});


Route::get('/APC', function () {
    return view('APC');
});



Route::get('/Conference', function () {
    return view('Conference');
});

Route::get('/Journal', function () {
    return view('Journal');
});

Route::get('/DAuthers', function () {
    return view('DAuthers');
});


Route::get('/DReviewers', function () {
    return view('DReviewers');
});


Route::get('/Privacy', function () {
    return view('Privacy');
});

Route::get('/Terms', function () {
    return view('Terms');
});


Route::get('/AboutJurnal', function () {
    return view('AboutJurnal');
});

Route::get('/Aims', function () {
    return view('Aims');
});

Route::get('/PolicyD', function () {
    return view('PolicyD');
});

Route::get('/Archive', function () {
    return view('Archive');
});

Route::get('/Ethical', function () {
    return view('Ethical');
});