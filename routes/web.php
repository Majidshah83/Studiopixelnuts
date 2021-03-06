<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MailController;



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

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/', [mainController::class, 'index'])->name('index');
Route::get('price', [PriceController::class, 'index'])->name('price');
Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('quote-logo', [FormController::class, 'index'])->name('quote-logo');
Route::post('formstore', [FormController::class, 'store'])->name('formstore');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('customer-list', [CustomerController::class, 'index'])->name('customer-list');
Route::get('customer-profile/{id}',[CustomerController::class, 'show'])->name('customer-profile');
Route::post('delete-profile/{id}',[CustomerController::class, 'removeFiles'])->name('delete-profile');
// Route::get('mail',[CustomerController::class, 'showmail'])->name('mail');