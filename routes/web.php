<?php

use App\Http\Controllers\SpecialtiesController;
use App\Http\Controllers\DoctersController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

// Registration and Login
Route::post('/reg', [UsersController::class, "userreg"])->name('register');
Route::post('/log', [UsersController::class, "login"])->name('log');

Route::get('/signup', function () {
    return view('register');
})->name('signup');

Route::get('/login', function () {
    return view('login');
})->name('login');

// Admin Dashboard
Route::get('/admindashboard', function () {
    return view('admindashboard');
})->name('admindashboard');

// Other Routes
Route::get('/blank', function () {
    return view('blank');
});

Route::get('/users', function () {
    return view('adminUsers');
})->name('adminuser');

Route::resource('users', UsersController::class);
Route::resource('specialties', SpecialtiesController::class);
Route::resource('docters', DoctersController::class);

Route::get('profile', [UsersController::class, "userProfile"])->name('profile.fname');
Route::post('fname', [UsersController::class, "fnameedit"]);
Route::post('lname', [UsersController::class, "lnameedit"]);
Route::post('email', [UsersController::class, "emailedit"]);
Route::post('password', [UsersController::class, "passwordedit"]);
Route::post('mobile', [UsersController::class, "mobileedit"]);
Route::post('bdate', [UsersController::class, "bdateedit"]);

Route::get('/doctors', function () {
    return view('user/doctors');
});

Route::get('/contact', function () {
    return view('user/contact');
});

Route::get('/home', [DoctersController::class, "show"])->name('home');
Route::get('/specialty/{id}', [DoctersController::class, "spDoctors"])->name('specialty');
Route::post('/home', [DoctersController::class, "storeSelectedSpecialty"])->name('test');
Route::post('/home', [ReservationController::class, "store"])->name('reservation.store');

