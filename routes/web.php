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

Route::get('/', [App\Http\Controllers\ShopController::class, 'shop'])->name('shop');
Route::get('/stadium-seat', [App\Http\Controllers\ShopController::class, 'stadium'])->name('stadium');
Route::get('/hotel-room', [App\Http\Controllers\ShopController::class, 'hotel'])->name('hotel');
Route::get('/event-hall', [App\Http\Controllers\ShopController::class, 'event'])->name('event');
Route::get('/car-booking', [App\Http\Controllers\ShopController::class, 'car'])->name('car');
Route::get('/cinema-ticket', [App\Http\Controllers\ShopController::class, 'cinema'])->name('cinema');
Route::get('/table-reservation', [App\Http\Controllers\ShopController::class, 'table'])->name('table');
Route::get('/book-now/{id}', [App\Http\Controllers\ShopController::class, 'bookNow'])->name('book-now');
Route::post('/complete-booking', [App\Http\Controllers\ShopController::class, 'completeBooking'])->name('complete-booking');
Route::get('/thank-you', [App\Http\Controllers\ShopController::class, 'thankYou'])->name('thank-you');


Route::get('/about-us', [App\Http\Controllers\ShopController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\ShopController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-store', [App\Http\Controllers\ShopController::class, 'contactStore'])->name('contact-store');






Route::group(['prefix' => 'admin'], function () {

    Auth::routes();


    Route::middleware('auth:web')->group(function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


        Route::get('service-providers/list', [App\Http\Controllers\admin\SellerController::class, 'index'])->name('service-providers-list');
        Route::get('service-providers/create', [App\Http\Controllers\admin\SellerController::class, 'create'])->name('service-providers-create');
        Route::post('service-providers/store', [App\Http\Controllers\admin\SellerController::class, 'store'])->name('service-providers-store');
        Route::delete('service-providers/delete/{id}', [App\Http\Controllers\admin\SellerController::class, 'delete'])->name('service-providers-delete');

        Route::get('services', [App\Http\Controllers\admin\SellerController::class, 'service'])->name('services');
        Route::get('bookings', [App\Http\Controllers\admin\SellerController::class, 'booking'])->name('bookings');

        Route::get('contacts', [App\Http\Controllers\admin\SellerController::class, 'contact'])->name('contacts');


    });

});


Route::group(['prefix' => 'service-provider'], function () {


    Route::get('/register', [App\Http\Controllers\seller\AuthController::class, 'registerForm'])->name('service-providers-register');
    Route::post('/register/post', [App\Http\Controllers\seller\AuthController::class, 'storeRegistration'])->name('service-providers-register-post');
    Route::get('/login', [App\Http\Controllers\seller\AuthController::class, 'loginForm'])->name('service-providers-login');
    Route::post('/login/post', [App\Http\Controllers\seller\AuthController::class, 'storeLogin'])->name('service-providers-login-post');
    Route::post('/logout', [App\Http\Controllers\seller\AuthController::class, 'logout'])->name('service-providers-logout');




    Route::middleware('auth:seller')->group(function () {
        Route::get('/home', [App\Http\Controllers\seller\HomeController::class, 'index'])->name('service-providers-home');
        Route::get('/profile', [App\Http\Controllers\seller\HomeController::class, 'profile'])->name('service-providers-profile');
        Route::post('/profile/update', [App\Http\Controllers\seller\HomeController::class, 'updateProfile'])->name('update-profile');



        Route::get('services/list', [App\Http\Controllers\seller\ServiceController::class, 'index'])->name('services-list');
        Route::get('services/create', [App\Http\Controllers\seller\ServiceController::class, 'create'])->name('services-create');
        Route::post('services/store', [App\Http\Controllers\seller\ServiceController::class, 'store'])->name('services-store');
        Route::delete('services/delete/{id}', [App\Http\Controllers\seller\ServiceController::class, 'delete'])->name('services-delete');


        Route::get('pending-bookings', [App\Http\Controllers\seller\BookingController::class, 'pendingBooking'])->name('pending-bookings');
        Route::get('complete-bookings', [App\Http\Controllers\seller\BookingController::class, 'completedBooking'])->name('complete-bookings');
        Route::get('all-bookings', [App\Http\Controllers\seller\BookingController::class, 'allBooking'])->name('all-bookings');

        Route::patch('/booking/{id}/status', [App\Http\Controllers\seller\BookingController::class, 'updateStatus'])->name('booking-status');
        Route::delete('booking/delete/{id}', [App\Http\Controllers\seller\BookingController::class, 'delete'])->name('booking-delete');



    });

});

// Route::group(['prefix' => 'seller'], function () {
//     // Define your routes for the 'service providers' guard here
//     Route::get('/dashboard', 'SellerController@index')->name('seller.dashboard');
//     // Example route for authentication
//     Route::middleware('auth:seller')->get('/profile', function () {
//         return view('seller.profile');
//     })->name('seller.profile');
// });
