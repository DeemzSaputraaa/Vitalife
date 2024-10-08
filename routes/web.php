<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpaController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SpesialisController;
use App\Http\Controllers\YogaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\AccountUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\Admin\SpasController;
use App\Http\Controllers\Admin\YogasController;
use App\Http\Controllers\Admin\SpesialisisController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\VoucherController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Arahkan root ke dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Sisa rute Anda tetap sama
Route::post('/admin/apply-voucher', [VoucherController::class, 'apply'])->name('admin.apply.voucher');

Route::get('/admin/profile/edit', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
Route::patch('/admin/profile/update', [AdminProfileController::class, 'update'])->name('admin.profile.update');

// Cuaca
Route::get('/weather', [WeatherController::class, 'getWeather']);

// Notifikasi
Route::get('/notifications', [NotificationController::class, 'getNotifications']);
Route::post('/notifications/mark-as-read', [NotificationController::class, 'markAsRead']);

// Autentikasi
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

// Autentikasi Media Sosial
Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProviderCallback']);

// Rute Publik
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

// Rute yang sebelumnya terotentikasi
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Admin routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/vouchers', [VoucherController::class, 'index'])->name('vouchers.index');
        Route::get('/vouchers/create', [VoucherController::class, 'create'])->name('vouchers.create');
        Route::post('/vouchers', [VoucherController::class, 'store'])->name('vouchers.store');
        Route::resource('vouchers', VoucherController::class)->except(['index', 'create', 'store']);
        // Route::resource('vouchers', VoucherController::class);
        // Route::post('/voucher', [VoucherController::class, 'store'])->name('voucher.store');
        // Route::get('/voucher', [VoucherController::class, 'index'])->name('admin.voucher');

        //account
        Route::get('/account/create', [AdminController::class, 'create'])->name('account.create');
        Route::post('/account', [AdminController::class, 'store'])->name('account.store');
        Route::get('/account/{user}/edit', [AdminController::class, 'edit'])->name('account.edit');
        Route::put('/account/{user}', [AdminController::class, 'update'])->name('account.update');
        Route::delete('/account/{user}', [AdminController::class, 'destroy'])->name('account.destroy');
    });
});

// Rute pengguna
Route::get('/spa', [SpaController::class, 'index'])->name('spa.index');
Route::get('/{id_spesialis}/bayar', [SpesialisController::class, 'bayar'])->name('spesialis.bayar');
Route::get('/spesialis', [SpesialisController::class, 'showSpes'])->name('spesialis');
Route::get('/spesialisFilter', [SpesialisController::class, 'spesFilter'])->name('spesialisFilter');
Route::get('/pembayaran', function () {
    return view('fitur.spesBayar');
});
Route::get('/spesialis/{id_spesialis}/whatsapp', [SpesialisController::class, 'getWhatsAppNumber'])->name('spesialis.whatsapp');
Route::get('/yoga', [YogaController::class, 'index'])->name('yoga.index');
Route::get('/event', [EventController::class, 'index'])->name('event.index');
Route::get('/events/search', [EventController::class, 'search'])->name('search.events');

// Rute profil
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
Route::patch('/profile/email', [ProfileController::class, 'updateEmail'])->name('profile.update.email');
Route::post('/profile/image', [ProfileController::class, 'updateImage'])->name('profile.update.image');

// ... (sisa rute tetap sama)
// Admin profile routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'Adminhomepage'])->name('admin.dashboard');
    Route::get('/website-usage-data', [DashboardController::class, 'getWebsiteUsageData']);

    Route::get('/admin/formspa', [SpaController::class, 'create'])->name('admin.formspa');
    Route::post('/admin/spa', [SpaController::class, 'store'])->name('spa.store');

    Route::get('/admin/formyoga', [YogaController::class, 'create'])->name('admin.formyoga');
    Route::post('/admin/yoga', [YogaController::class, 'store'])->name('yoga.store');

    Route::get('/admin/formspesialis', [SpesialisController::class, 'create'])->name('admin.formspesialis');
    Route::post('/admin/spesialis', [SpesialisController::class, 'store'])->name('spesialis.store');

    Route::post('/admin/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
    Route::get('/admin/feedback', [FeedbackController::class, 'index'])->name('admin.feedback');

    Route::get('/admin/accountuser', [AccountUserController::class, 'index'])->name('admin.accountuser');
});

// Admin routes
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/event', [EventController::class, 'adminIndex'])->name('event.index');
    Route::get('/event/create', [EventController::class, 'create'])->name('event.create');
    Route::post('/event', [EventController::class, 'store'])->name('event.store');
    Route::get('/event/{id_event}/edit', [EventController::class, 'edit'])->name('event.edit');
    Route::put('/event/{id_event}', [EventController::class, 'update'])->name('event.update');
    Route::delete('/event/{id_event}', [EventController::class, 'destroy'])->name('event.destroy');
});

// Admin Spa
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/spas', [SpasController::class, 'index'])->name('spas.index');
    Route::get('/spas/{id_spa}/edit', [SpasController::class, 'edit'])->name('spas.edit');
    Route::put('/spas/{id_spa}', [SpasController::class, 'update'])->name('spas.update');
    Route::delete('/spas/{id_spa}', [SpasController::class, 'destroy'])->name('spas.destroy');
});

// Admin Yoga
Route::prefix('admin')->group(function () {
    Route::get('/yogas', [YogasController::class, 'index'])->name('admin.yogas.index');
    Route::get('/yogas/{id_yoga}/edit', [YogasController::class, 'edit'])->name('admin.yogas.edit');
    Route::put('/yogas/{id_yoga}', [YogasController::class, 'update'])->name('admin.yogas.update');
    Route::delete('/yogas/{id_yoga}', [YogasController::class, 'destroy'])->name('admin.yogas.destroy');
});

// Admin Spesialis
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/spesialisis', [SpesialisisController::class, 'index'])->name('spesialisis.index');
    Route::get('/spesialisis/{id_spesialis}/edit', [SpesialisisController::class, 'edit'])->name('spesialisis.edit');
    Route::put('/spesialisis/{id_spesialis}', [SpesialisisController::class, 'update'])->name('spesialisis.update');
    Route::delete('/spesialisis/{id_spesialis}', [SpesialisisController::class, 'destroy'])->name('spesialisis.destroy');
});

// Other Routes
Route::get('/spaadmin', function () {
    return view('spaadmin');
});

Route::post('/change-language', [LanguageController::class, 'changeLanguage']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

require __DIR__ . '/auth.php';