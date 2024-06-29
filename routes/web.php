<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpaController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/spa', [SpaController::class, 'showSpas'])->name('spa');
    Route::get('/spaFilter', [SpaController::class, 'spaFilter'])->name('spaFilter');
});
//welcome

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/detailEvent', function () {
    return view('fitur.detailEvent');
});

//Dashboard

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//spa

// Route::get('/spa', function () {
//     return view('fitur.spa');
// })->middleware(['auth', 'verified'])->name('spa');

// spesialis

Route::get('/spesialis', function () {
    return view('fitur.spesialis');
})->middleware(['auth', 'verified'])->name('spesialis');

//yoga

Route::get('/yoga', function () {
    return view('fitur.yoga');
})->middleware(['auth', 'verified'])->name('yoga');

//event

Route::get('/event', function () {
    return view('fitur.event');
})->middleware(['auth', 'verified'])->name('event');

//Features
// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
// Route::get('/features', 'FeaturesController@index')->name('features');
// Route::get('/specialisation', 'SpecialisationController@index')->name('specialisation');
// Route::get('/voucher', 'VoucherController@index')->name('voucher');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

require __DIR__ . '/auth.php';
