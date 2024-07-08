<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpaController;
use App\Http\Controllers\SpesialisController;
use App\Http\Controllers\YogaController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\AccountUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;

// Welcome
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/notifications', [NotificationController::class, 'getNotifications']);
    Route::post('/notifications/mark-as-read', [NotificationController::class, 'markAsRead']);
});

// Authentication
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

// Social Media Authentication
Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProviderCallback']);

// Account User
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/accountuser', [AccountUserController::class, 'index'])->name('admin.accountuser');
});

// Public Routes
Route::get('/contact', function () {
    return view('fitur.contact');
});

Route::get('/service', function () {
    return view('fitur.service');
});

Route::get('/detailEvent', function () {
    return view('fitur.detailEvent');
});

// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //spa
    Route::get('/spa', [SpaController::class, 'showSpas'])->name('spa');
    Route::get('/spaFilter', [SpaController::class, 'spaFilter'])->name('spaFilter');
    //spesiyalis
    Route::get('/spesialis', [SpesialisController::class, 'showSpes'])->name('spesialis');
    Route::get('/spesialisFilter', [SpesialisController::class, 'spesFilter'])->name('spesialisFilter');

    Route::get('/yoga', function () {
        return view('fitur.yoga');
    })->name('yoga');

    Route::get('/event', function () {
        return view('fitur.event');
    })->name('event');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/formspa', [SpaController::class, 'create'])->name('admin.formspa');
    Route::post('/admin/spa', [SpaController::class, 'store'])->name('spa.store');

    Route::get('/admin/formyoga', [YogaController::class, 'create'])->name('admin.formyoga');
    Route::post('/admin/yoga', [YogaController::class, 'store'])->name('yoga.store');
});

// Other Routes
Route::get('/spaadmin', function () {
    return view('spaadmin');
});

require __DIR__ . '/auth.php';
