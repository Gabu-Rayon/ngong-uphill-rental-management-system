<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NgongUphillRentalsController;

use App\Http\Controllers\AdminController;

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
Route::get('/add-house', [NgongUphillRentalsController::class, 'addHouse'])->name('add-house');


Route::post('/users/create', [NgongUphillRentalsController::class, 'create'])->name('create');
Route::post('/users/authenticate', [NgongUphillRentalsController::class, 'authenticate'])->name('authenticate');
Route::post('/users/logout', [NgongUphillRentalsController::class, 'logout'])->name('users.logout');



// Admin routes 
Route::get('/admin/admin-login', [AdminController::class, 'adminLogin'])->name('admin-login');
Route::post('/admin/admin-login-submit', [AdminController::class, 'adminLoginSubmit'])->name('admin-login-submit');
Route::any('/admin/admin-logout', [AdminController::class, 'adminLogout'])->name('admin-logout');
Route::get('/admin/index', [AdminController::class, 'adminIndex'])->name('index');

Route::post('/users/rent-payment', [AdminController::class, 'rentPayment'])->name('rent-payment');
Route::post('users/update-house', [NgongUphillRentalsController::class, 'updateHouse'])->name('update-house');


Route::get('/tenant/edit', [AdminController::class, 'editTenant'])->name('tenant.edit');
Route::post('/tenant/update', [AdminController::class, 'udateTenant'])->name('tenant.update');
Route::post('/tenant/delete', [AdminController::class, 'deleteTenant'])->name('tenant.delete');

Route::get('/payment/edit', [AdminController::class, 'editPayment'])->name('payment.edit');
Route::post('/payment/delete', [AdminController::class, 'deletePayment'])->name('payment.delete');
Route::post('/payment/update', [AdminController::class, 'updatePayment'])->name('payment.update');

Route::get('/house/edit', [AdminController::class, 'editHouse'])->name('house.edit');
Route::post('/house/delete', [AdminController::class, 'deleteHouse'])->name('house.delete');
Route::post('/house/update', [AdminController::class, 'updateHouse'])->name('house.update');

Route::get('/category/edit', [AdminController::class, 'editCategory'])->name('category.edit');
Route::post('/category/delete', [AdminController::class, 'deleteCategory'])->name('category.delete');
Route::post('/category/update', [AdminController::class, 'updateCategory'])->name('category.update');