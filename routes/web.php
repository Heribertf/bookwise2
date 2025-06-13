<?php

use App\Http\Controllers\OnboardingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('welcome');
})->name('bookwise.home');
Route::get('/about', function () {
    return view('about');
})->name('bookwise.about');
Route::get('/contact', function () {
    return view('contact');
})->name('bookwise.contact');
Route::get('/privacy-policy', function () {
    return view('privacy');
})->name('bookwise.privacy-policy');
Route::get('/terms-of-service', function () {
    return view('terms');
})->name('bookwise.terms-of-service');
Route::get('/faq', function () {
    return view('faq');
})->name('bookwise.faq');
Route::get('/services', function () {
    return view('services');
})->name('bookwise.services');
Route::get('/features', function () {
    return view('features');
})->name('bookwise.features');
Route::get('/pricing', function () {
    return view('pricing');
})->name('bookwise.pricing');
Route::get('/api', function () {
    return view('api');
})->name('bookwise.api');
Route::get('/integrations', function () {
    return view('integrations');
})->name('bookwise.integrations');
Route::get('/documentation', function () {
    return view('documentation');
})->name('bookwise.documentation');
Route::get('/blog', function () {
    return view('blog');
})->name('bookwise.blog');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('booking')->group(function () {
    Route::get('/', [BookingController::class, 'index'])->name('booking.index');
    Route::get('/time-slots/{service_id}', [BookingController::class, 'showTimeSlots'])->name('booking.time-slots');
    Route::get('/form', [BookingController::class, 'showBookingForm'])->name('booking.form');
    Route::post('/', [BookingController::class, 'store'])->name('booking.store');
    Route::get('/confirmation/{id}', [BookingController::class, 'confirmation'])->name('booking.confirmation');
});


// Tenant Identification Middleware (sets tenant context)
Route::middleware(['set.tenant.from.subdomain'])->group(function () {

    // Booking Flow (available to all users)
    // Route::prefix('booking')->group(function () {
    //     Route::get('/', [BookingController::class, 'index'])->name('booking.index');
    //     Route::get('/time-slots/{service_id}', [BookingController::class, 'showTimeSlots'])->name('booking.time-slots');
    //     Route::get('/form', [BookingController::class, 'showBookingForm'])->name('booking.form');
    //     Route::post('/', [BookingController::class, 'store'])->name('booking.store');
    //     Route::get('/confirmation/{id}', [BookingController::class, 'confirmation'])->name('booking.confirmation');
    // });

    // // Payment Processing
    Route::post('/payments/mpesa/initiate', [PaymentController::class, 'initiateMpesa'])->name('payments.mpesa.initiate');
    Route::post('/payments/mpesa/callback', [PaymentController::class, 'mpesaCallback'])->name('payments.mpesa.callback');

    // Authentication Routes
    Auth::routes(['verify' => true]);

    // Client Routes (authenticated clients only)
    Route::middleware(['auth', 'verified', 'client'])->group(function () {
        Route::get('/client/dashboard', [BookingController::class, 'clientDashboard'])->name('client.dashboard');
        Route::get('/client/appointments', [BookingController::class, 'clientAppointments'])->name('client.appointments');
    });

    // Business Owner/Staff Routes (authenticated business users)
    Route::middleware(['auth', 'verified', 'tenant'])->prefix('dashboard')->group(function () {
        // Dashboard
        Route::get('/', [BookingController::class, 'dashboard'])->name('dashboard');

        // Appointments Management
        Route::get('/appointments', [BookingController::class, 'appointments'])->name('appointments.index');
        Route::get('/appointments/{id}', [BookingController::class, 'showAppointment'])->name('appointments.show');
        Route::put('/appointments/{id}/confirm', [BookingController::class, 'confirmAppointment'])->name('appointments.confirm');
        Route::put('/appointments/{id}/cancel', [BookingController::class, 'cancelAppointment'])->name('appointments.cancel');
        Route::put('/appointments/{id}/complete', [BookingController::class, 'completeAppointment'])->name('appointments.complete');

        // Services Management
        Route::get('/services', [BookingController::class, 'services'])->name('services.index');
        Route::get('/services/create', [BookingController::class, 'createService'])->name('services.create');
        Route::post('/services', [BookingController::class, 'storeService'])->name('services.store');
        Route::get('/services/{id}/edit', [BookingController::class, 'editService'])->name('services.edit');
        Route::put('/services/{id}', [BookingController::class, 'updateService'])->name('services.update');
        Route::delete('/services/{id}', [BookingController::class, 'destroyService'])->name('services.destroy');

        // Staff Management
        Route::get('/staff', [BookingController::class, 'staff'])->name('staff.index');
        Route::get('/staff/create', [BookingController::class, 'createStaff'])->name('staff.create');
        Route::post('/staff', [BookingController::class, 'storeStaff'])->name('staff.store');
        Route::get('/staff/{id}/edit', [BookingController::class, 'editStaff'])->name('staff.edit');
        Route::put('/staff/{id}', [BookingController::class, 'updateStaff'])->name('staff.update');
        Route::delete('/staff/{id}', [BookingController::class, 'destroyStaff'])->name('staff.destroy');

        // Business Settings
        Route::get('/settings', [BookingController::class, 'settings'])->name('settings');
        Route::put('/settings', [BookingController::class, 'updateSettings'])->name('settings.update');

        // Reports
        Route::get('/reports', [BookingController::class, 'reports'])->name('reports');
        Route::get('/reports/export', [BookingController::class, 'exportReports'])->name('reports.export');
    });
});

// routes/web.php

Route::middleware(['auth', 'tenant', 'onboarding'])->group(function () {
    Route::prefix('onboarding/{tenant}')->group(function () {
        Route::get('/step1', [OnboardingController::class, 'showStep1'])->name('onboarding.step1');
        Route::post('/step1', [OnboardingController::class, 'completeStep1'])->name('onboarding.completeStep1');
        Route::get('/step2', [OnboardingController::class, 'showStep2'])->name('onboarding.step2');
        Route::post('/step2', [OnboardingController::class, 'completeStep2'])->name('onboarding.completeStep2');
        Route::get('/step3', [OnboardingController::class, 'showStep3'])->name('onboarding.step3');
        Route::post('/complete', [OnboardingController::class, 'completeOnboarding'])->name('onboarding.complete');
    });
});


// Tenant Registration (only on main domain)
// Route::middleware(['ensure.main.domain'])->group(function () {
//     Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
//     Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register.store');
// });

require __DIR__ . '/auth.php';
