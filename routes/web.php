<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminManagementController;
use App\Http\Controllers\SigninController;

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

Route::get('/cars-available', [CarController::class, 'availableCars'])->name('cars.available');
Route::post('/contact-messages', [ContactMessageController::class, 'store'])->name('contact-messages.store');

Route::post('book/{car}', [BookingController::class, 'handleBooking'])->name('book.handle');
Route::get('invoice/{booking}', [BookingController::class, 'showInvoice'])->name('book.invoice');

Route::middleware('auth')->group(function () {
    Route::get('book/{carId}', [BookingController::class, 'book'])->name('book.form');
    Route::post('book/{carId}', [BookingController::class, 'handleBooking'])->name('book.handle');
});

Route::middleware(['auth:admin'])->group(function () {
    Route::get('index_admin', [AdminController::class, 'index'])->name('admin.index_admin');
    Route::resource('users', UserController::class);
    Route::resource('cars', CarController::class);
    Route::resource('bookingcustomer', BookingController::class);
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('admin/signin', [AdminManagementController::class, 'showLoginForm'])->name('admin.signin');
Route::post('admin/login', [AdminManagementController::class, 'login']);
Route::post('admin/logout', [AdminManagementController::class, 'logout'])->name('admin.logout');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('admin/index_admin', [CustomAuthController::class, 'dashboard']);
Route::get('admin/signin', [CustomAuthController::class, 'index'])->name('admin/signin');
Route::post('admin/custom-login', [CustomAuthController::class, 'customLogin'])->name('signin.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::middleware(['auth'])->group(function () {
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
// For the login page
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.submit');

// For the registration page
Route::get('user-signup', [AuthController::class, 'showRegistrationForm'])->name('user-signup');
Route::post('user-signup', [AuthController::class, 'register'])->name('user-signup.submit');

// Logout route
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
Route::get('/how-it-works', function () {
    return view('how-it-works');
})->name('how-it-works');
Route::get('/error-404', function () {
    return view('error-404');
})->name('error-404');
Route::get('/error-500', function () {
    return view('error-500');
})->name('error-500');
Route::get('/choose-signup', function () {
    return view('choose-signup');
})->name('choose-signup');
Route::get('/user-signup', function () {
    return view('user-signup');
})->name('user-signup');
Route::get('/provider-signup', function () {
    return view('provider-signup');
})->name('provider-signup');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/reset-password', function () {
    return view('reset-password');
})->name('reset-password');
Route::get('/password-recovery', function () {
    return view('password-recovery');
})->name('password-recovery');
Route::get('/phone-otp', function () {
    return view('phone-otp');
})->name('phone-otp');
Route::get('/email-otp', function () {
    return view('email-otp');
})->name('email-otp');
Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/login-activity', function () {
    return view('login-activity');
})->name('login-activity');
Route::get('/login-email', function () {
    return view('login-email');
})->name('login-email');
Route::get('/login-phone', function () {
    return view('login-phone');
})->name('login-phone');

Route::get('/change-password', function () {
    return view('change-password');
})->name('change-password');

Route::get('/index-5', function () {
    return view('index-5');
})->name('index-5');


Route::Group(['prefix' => 'admin'], function () {

    Route::get('/index_admin', [AdminController::class, 'index'])->name('admin.index_admin');
    Route::get('admin/admin', [AdminManagementController::class, 'index'])->name('admin.admin.index');

    Route::get('contact-messages', [ContactMessageController::class, 'index'])->name('admin.contact-messages.index');
    Route::get('contact-messages/create', [ContactMessageController::class, 'create'])->name('admin.contact-messages.create');
    Route::post('contact-messages', [ContactMessageController::class, 'store'])->name('admin.contact-messages.store');
    Route::get('contact-messages/{id}', [ContactMessageController::class, 'show'])->name('admin.contact-messages.show');
    Route::get('contact-messages/{id}/edit', [ContactMessageController::class, 'edit'])->name('admin.contact-messages.edit');
    Route::put('contact-messages/{id}', [ContactMessageController::class, 'update'])->name('admin.contact-messages.update');
    Route::delete('contact-messages/{id}', [ContactMessageController::class, 'destroy'])->name('admin.contact-messages.destroy');

    Route::put('bookingcustomer/{id}/approve', [BookingController::class, 'approve'])->name('admin.bookingcustomer.approve');
    Route::put('bookingcustomer/{id}/reject', [BookingController::class, 'reject'])->name('admin.bookingcustomer.reject');
    Route::get('bookingcustomer', [BookingController::class, 'index'])->name('admin.bookingcustomer.index');
    Route::get('bookingcustomer/{id}/edit', [BookingController::class, 'edit'])->name('admin.bookingcustomer.edit');
    Route::put('bookingcustomer/{id}', [BookingController::class, 'update'])->name('admin.bookingcustomer.update');
    Route::delete('bookingcustomer/{id}', [BookingController::class, 'destroy'])->name('admin.bookingcustomer.destroy');

    Route::get('reports', [ReportController::class, 'index'])->name('admin.reports.index');
    Route::get('reports/create', [ReportController::class, 'create'])->name('admin.reports.create');
    Route::post('reports', [ReportController::class, 'store'])->name('admin.reports.store');
    Route::get('reports/{report}/edit', [ReportController::class, 'edit'])->name('admin.reports.edit');
    Route::put('reports/{report}', [ReportController::class, 'update'])->name('admin.reports.update');
    Route::delete('reports/{report}', [ReportController::class, 'destroy'])->name('admin.reports.destroy');

    Route::get('cars', [CarController::class, 'index'])->name('admin.cars.index');
    Route::get('cars/create', [CarController::class, 'create'])->name('admin.cars.create');
    Route::post('cars', [CarController::class, 'store'])->name('admin.cars.store');
    Route::get('cars/{car}/edit', [CarController::class, 'edit'])->name('admin.cars.edit');
    Route::put('cars/{car}', [CarController::class, 'update'])->name('admin.cars.update');
    Route::delete('cars/{car}', [CarController::class, 'destroy'])->name('admin.cars.destroy');

    Route::get('rentals', [RentalController::class, 'index'])->name('admin.cars.index');
    Route::get('rentals/create', [RentalController::class, 'create'])->name('admin.rentals.create');
    Route::post('rentals', [RentalController::class, 'store'])->name('admin.rentals.store');
    Route::get('rentals/{rental}/edit', [RentalController::class, 'edit'])->name('admin.rentals.edit');
    Route::put('rentals/{rental}', [RentalController::class, 'update'])->name('admin.rentals.update');
    Route::delete('rentals/{rental}', [RentalController::class, 'destroy'])->name('admin.rentals.destroy');

    Route::get('users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('users', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('users/{user}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');

    Route::get('admin', [AdminManagementController::class, 'index'])->name('admin.admin.index');
    Route::get('admin/create', [AdminManagementController::class, 'create'])->name('admin.admin.create');
    Route::post('admin', [AdminManagementController::class, 'store'])->name('admin.admin.store');
    Route::get('admin/{admin}/edit', [AdminManagementController::class, 'edit'])->name('admin.admin.edit');
    Route::put('admin/{admin}', [AdminManagementController::class, 'update'])->name('admin.admin.update');
    Route::delete('admin/{admin}', [AdminManagementController::class, 'destroy'])->name('admin.admin.destroy');




    Route::get('/sub-categories', function () {
    return view('admin.sub-categories');
    })->name('sub-categories');

    Route::get('/add-subcategories', function () {
    return view('admin.add-subcategories');
    })->name('add-subcategories');

    Route::get('/edit-subcategories', function () {
    return view('admin.edit-subcategories');
    })->name('edit-subcategories');

    Route::get('/forget-password', function () {
    return view('admin.forget-password');
    })->name('forget-password');

    Route::get('/signin', function () {
    return view('admin.signin');
    })->name('signin');


});
