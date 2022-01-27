<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Register2Controller;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\EditProfile2Controller;
use App\Http\Controllers\Booking2Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('aboutUs', function(){
    return view('aboutUs');
});

Route::get('register', function(){
    return view('register');
});

Route::get('register2', function(){
    return view('register2');
});

Route::get('courts', function(){
    return view('courts');
});

Route::get('badminton', function(){
    return view('badminton');
});

Route::get('basketball', function(){
    return view('basketball');
});

Route::get('book', function(){
    return view('book');
});

Route::get('editBooking', function(){
    return view('editBooking');
});

Route::get('futsal', function(){
    return view('futsal');
});

Route::get('mybookings', function(){
    return view('mybookings');
});

Route::get('profileStaff', function(){
    return view('profileStaff');
});

Route::get('viewBookings', function(){
    return view('viewBookings');
});

//Route for Qr Code
Route::post('/mybookings', [BookingController::class, 'store'])->name('store');
Route::get('/qrcode/{id}', [BookingController::class, 'generate'])->name('generate');

//Route for Login and Register
Route::get ('/register1',             [RegisterController::class, 'index'])                 -> name('register1');
Route::post('/register1',             [RegisterController::class, 'store'])                 -> name('register-store');
Route::get ('/login',                 [UserController    ::class, 'indexLogin'])            -> name('login');
Route::post('/login',                 [UserController    ::class, 'storeLogin'])            -> name('login-store');
Route::get ('/profileUser',           [UserController    ::class, 'profileDashboard'])      -> name('profileUser')->middleware('auth');
Route::post('/logout',                [UserController    ::class, 'storeLogout'])           -> name('logout');
Route::get ('/register2',             [Register2Controller::class, 'index'])                 -> name('register2');
Route::post('/register2',             [Register2Controller::class, 'store'])                 -> name('register2-store');
Route::get ('/login-staff',           [StaffController    ::class, 'indexLogin'])            -> name('login-staff');
Route::post('/login-staff',           [StaffController    ::class, 'storeLogin'])            -> name('login-staff-store');
Route::get ('/profileStaff',          [StaffController    ::class, 'profileDashboard'])      -> name('profileStaff');

//Route for Court Booking
Route::get ('/courts',                [BookingController ::class, 'index'])                 -> name('courts');
Route::get ('/badmintonBooking',      [BookingController ::class, 'badmintonBooking'])      -> name('badmintonBooking');
Route::post('/badmintonBooking',      [BookingController ::class, 'storeBadmintonBooking']) -> name('badminton-store');
Route::get ('/futsalBooking',         [BookingController ::class, 'futsalBooking'])         -> name('futsalBooking');
Route::post('/futsalBooking',         [BookingController ::class, 'storeFutsalBooking'])    -> name('futsal-store');
Route::get ('/basketballBooking',     [BookingController ::class, 'basketballBooking'])     -> name('basketballBooking');
Route::post('/basketballBooking',     [BookingController ::class, 'storeBasketballBooking'])-> name('basketball-store');
Route::get ('/mybookings',            [BookingController ::class, 'myBooking'])             -> name('myBookings');
Route::get('/click_edit/{id}', [BookingController::class, 'edit_function']);
Route::post('/update/{id}', [BookingController::class, 'update']);
Route::get('/click_delete/{id}',[BookingController::class, 'delete_function']);
Route::get('/click_delete/{id}',[BookingController::class, 'delete']);

// Routes for Edit Profile
Route::get ('/editProfileUser',            [EditProfileController ::class, 'index'])  -> name('editProfileUser');
Route::get ('/edit-profile/{id}',          [EditProfileController ::class, 'edit']);
Route::post('/update-profile/{id}',        [EditProfileController ::class, 'update']) -> name('update-profile');
Route::get ('/editProfileStaff/{id}',           [EditProfile2Controller ::class, 'edit']) -> name('editProfileStaff');
Route::get ('/edit-profile-staff/{id}',    [EditProfile2Controller ::class, 'edit']);
Route::post('/edit-profile-staff/{id}',  [EditProfile2Controller ::class, 'update'])-> name('update-profile-staff');
Route::get ('/viewbookings',               [Booking2Controller ::class, 'viewBooking'])-> name('viewBookings');