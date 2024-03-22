<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




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


Route::get('/AboutJournal', function () {
    return view('AboutJournal');
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

Route::get('/Editorial', function () {
    return view('Editorial');
});

Route::get('/User', function () {
    return view('User');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/userr-resgistration', function () {
    return view('userr');
});

