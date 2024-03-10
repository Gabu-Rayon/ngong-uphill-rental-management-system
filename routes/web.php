<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NgongUphillRentalsController;

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


Route::get('/', [NgongUphillRentalsController::class, 'index'])->name('index');
Route::get('/about', [NgongUphillRentalsController::class, 'about'])->name('index');
Route::get('/blog-single', [NgongUphillRentalsController::class, 'blogSingle'])->name('blog-single');
Route::get('/blog', [NgongUphillRentalsController::class, 'blog'])->name('index');
Route::get('/contact', [NgongUphillRentalsController::class, 'contact'])->name('contact');
Route::get('/rooms', [NgongUphillRentalsController::class, 'rooms'])->name('rooms');
Route::get('/services', [NgongUphillRentalsController::class, 'services'])->name('services');
Route::get('/sign-up', [NgongUphillRentalsController::class, 'signUp'])->name('sign-up');
Route::get('/sign-in', [NgongUphillRentalsController::class, 'signIn'])->name('sign-in');
Route::get('/user-profile', [NgongUphillRentalsController::class, 'userProfile'])->name('user-profile');
Route::get('/pay-rental', [NgongUphillRentalsController::class, 'payRental'])->name('pay-rental');
Route::get('/rent-receipt', [NgongUphillRentalsController::class, 'rentReciept'])->name('rent-receipt');

Route::post('/users/create', [NgongUphillRentalsController::class, 'create'])->name('create');
Route::post('/users/authenticate', [NgongUphillRentalsController::class, 'authenticate'])->name('authenticate');
Route::post('/users/rent-payment', [NgongUphillRentalsController::class, 'rentPayment'])->name('rent-payment');


Route::post('/delete', [NgongUphillRentalsController::class, 'delete'])->name('delete');
Route::post('/update', [NgongUphillRentalsController::class, 'authenticate'])->name('authenticate');