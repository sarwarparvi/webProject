<?php

use App\Http\Controllers\HotelAdminController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\CustomerController;
use App\Http\Middleware\IfLoggedIn;
use App\Http\Middleware\IfNotLoggedIn;
use App\Models\Hotel;

Route::get('/', function (Hotel $hotel) {
    $hotels = Hotel::find($hotel->all());
    return view('/index', compact('hotels'));
});


Route::get('/index', function (Hotel $hotel) {
    $hotels = Hotel::find($hotel->all());
    return view('/index', compact('hotels'));
});

// customer logout
Route::get('/logout', function () {
    session()->forget('user');
    return redirect('login');
});


Route::view('/hotels', 'hotels');
Route::view('/cars', 'cars');
Route::view('/resturants', 'resturants');

// agar login ha to ya routes chalny nahi dega
Route::middleware([IfLoggedIn::class])->group(function () {
    Route::controller(VendorController::class)->group(function () {

        Route::get('/vendor_register_form', 'registerForm')->name('vendor_register_form');
        Route::post('/vendor_register', 'register')->name('register');

        Route::get('/vendor_login_form', 'loginForm')->name('vendor_login_form');
        Route::post('/vendor_login', 'login')->name('login');

        Route::get('/hotel_reg_form', 'hotel_registration')->name('hotel_reg_form');
        //Route::get('/vendor_dashboard', 'dashboard')->name('vendor_dashboard');

    });
});

// agar login nahi ha to ya routes chalny nahi dega
Route::middleware([IfNotLoggedIn::class])->group(function () {
    Route::controller(VendorController::class)->group(function () {

        //Route::get('/vendor_dashboard/{hotel}', 'showHotel')->name('hotel_dashboard');
        Route::get('/vendor_dashboard', 'dashboard')->name('vendor_dashboard');

        Route::get('/hotel_registration_form', 'hotel_reg')->name('hotel_registration_form');

        Route::get('/vendor_logout', 'logout')->name('logout');
    });
});

Route::middleware([])->group(function () {
    Route::controller(HotelController::class)->group(function () {
        Route::post('/hotel_registration', 'register_hotel')->name('hotel_registration');
        Route::get('/vendor_dashboard/{hotel}', 'showHotel')->name('hotel_dashboard');

        Route::get('/vendor/{hotel}/dashboard', 'dashboard')->name('show_rooms');
        //Route::post('/hotel/room_registration', 'saveRoom')->name('register_room');

        //Route::get('/vendor_dashboard', 'dashboard')->name('vendor_dashboard');


    });
});

Route::middleware([])->group(function () {
    Route::controller(RoomController::class)->group(function () {

        Route::get('hotel/{hotel}/room_registration', 'registerForm')->name('room_registration_form');
        Route::post('/hotel/{hotel}/room_registration', 'registerRoom')->name('register_room');

        Route::post('/room/update/{roomId}', 'updateRoom')->name('/room/update');

        Route::get('/vendor_dashboard/{hotel_id?}', 'dashboard')->name('vendor_dashboard');
    });
});

Route::middleware([])->group(function () {
    Route::controller(CustomerController::class)->group(function () {

        Route::post('/customer_login', 'login')->name('customer_login');
        Route::post('/customer_register', 'register')->name('customer_register');

        Route::get('/customer_logout', 'logout')->name('logout');
        //Route::get('/index', 'dashboard');
        Route::get('/hotels', 'hotel_list');
    });
});
