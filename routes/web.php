<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;

// Main Route
Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/services', [ServiceController::class, 'index'])->name('services');

// Admin Area Route
Route::get('/inbox', [InboxController::class, 'index'])->name('inbox');
Route::delete('/inbox/{inbox}', [InboxController::class, 'destroy'])->name('inbox.delete');

Route::get('/service/{service}', [ServiceController::class, 'edit_form'])->name('service');
Route::post('/service/{service}', [ServiceController::class, 'edit']);
Route::delete('/service/{service}', [ServiceController::class, 'destroy']);

Route::get('/services.add', [ServiceController::class, 'add'])->name('services.add');
Route::post('/services.add', [ServiceController::class, 'add_submit']);

Route::get('/services.admin', [ServiceController::class, 'all_services'])->name('services.admin');

Route::get('/setting', [SettingController::class, 'index'])->name('setting');
Route::post('/setting', [SettingController::class, 'information']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

