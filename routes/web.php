<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpaController;
use App\Http\Controllers\SpesialisController;
use App\Http\Controllers\YogaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\AccountUserController;
use App\Models\yoga;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\FeedbackController;
use App\Models\Feedback;
use App\Http\Controllers\Admin\SpasController;
use App\Http\Controllers\Admin\YogasController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\DashboardController;

// Welcome
Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/profile/edit', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
Route::patch('/admin/profile/update', [AdminProfileController::class, 'update'])->name('admin.profile.update');

// Weather
Route::get('/weather', [WeatherController::class, 'getWeather']);

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

// Public Routes
Route::get('/contact', function () {
    return view('fitur.contact');
})->name('contact');

Route::get('/aboutUs', function () {
    return view('fitur.aboutUs');
})->name('aboutus');

Route::get('/service', function () {
    return view('fitur.service');
})->name('service');

Route::get('/detailEvent', function () {
    return view('fitur.detailEvent');
});

// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //spa
    Route::get('/spa', [SpaController::class, 'index'])->name('spa.index');

    //spesiyalis
    Route::get('/spesialis', [SpesialisController::class, 'showSpes'])->name('spesialis');
    Route::get('/spesialisFilter', [SpesialisController::class, 'spesFilter'])->name('spesialisFilter');
    Route::get('/pembayaran', function () {
        return view('fitur.spesBayar');
    });

    //yoga
    Route::get('/yoga', [YogaController::class, 'index'])->name('yoga.index');


    Route::get('/event', function () {
        return view('fitur.event');
    })->name('event');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile/email', [ProfileController::class, 'updateEmail'])->name('profile.update.email');
});

// Admin Routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'Adminhomepage'])->name('admin.dashboard');
    Route::get('/website-usage-data', [DashboardController::class, 'getWebsiteUsageData']);
    Route::get('/admin/formspa', [SpaController::class, 'create'])->name('admin.formspa');
    Route::post('/admin/spa', [SpaController::class, 'store'])->name('spa.store');
    Route::get('/admin/formyoga', [YogaController::class, 'create'])->name('admin.formyoga');
    Route::post('/admin/yoga', [YogaController::class, 'store'])->name('yoga.store');
    Route::post('/admin/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
    Route::get('/admin/feedback', [FeedbackController::class, 'index'])->name('admin.feedback');
    Route::get('/admin/accountuser', [AccountUserController::class, 'index'])->name('admin.accountuser');
});

Route::get('auth/{provider}', [SocialAuthController::class, 'redirectToProvider']);
Route::get('auth/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback']);

// Admin Spa
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/spas', [SpasController::class, 'index'])->name('spas.index');
    Route::get('/spas/{id_spa}/edit', [SpasController::class, 'edit'])->name('spas.edit');
    Route::put('/spas/{id_spa}', [SpasController::class, 'update'])->name('spas.update');
    Route::delete('/spas/{id_spa}', [SpasController::class, 'destroy'])->name('spas.destroy');
});

// Admin Yoga
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/yogas', [YogasController::class, 'index'])->name('yogas.index');
    Route::get('/yogas/{id_yoga}/edit', [YogaController::class, 'edit'])->name('yogas.edit');
    Route::put('/yogas/{id_yoga}', [YogaController::class, 'update'])->name('yogas.update');
    Route::delete('/yogas/{id_yoga}', [YogaController::class, 'destroy'])->name('yogas.destroy');
});

// Other Routes
Route::get('/spaadmin', function () {
    return view('spaadmin');
});

require __DIR__ . '/auth.php';
