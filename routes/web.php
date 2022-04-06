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
use App\Http\Controllers\PackageFormController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ListingControlller;
use App\Http\Controllers\Listing2Controlller;




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
// Route::get('delete-profile/{id}',[CustomerController::class, 'destroy'])->name('delete-profile');
Route::post('delete-profile/{id}',[FormController::class, 'removeFiles'])->name('delete-profile');
Route::get('quote-package',[PackageFormController::class, 'index'])->name('quote-package');
Route::post('package_form_store',[PackageFormController::class, 'store'])->name('package_form_store');
Route::get('customer-package',[PackageFormController::class, 'showlist'])->name('customer-package');
Route::get('customer-packages/{id}',[PackageFormController::class, 'showpackage'])->name('customer-packages');
Route::post('delete-package/{id}',[PackageFormController::class, 'removeFiles'])->name('delete-package');
Route::get('card',[CardController::class, 'index'])->name('card');
Route::post('card-store',[CardController::class, 'store'])->name('card-store');
Route::get('show-list',[CardController::class, 'showlist'])->name('show-list');
Route::get('show_card/{id}',[CardController::class, 'showcard'])->name('show_card');
Route::post('delete-card/{id}',[CardController::class, 'removeFiles'])->name('delete-card');
Route::get('qoute-listing',[ListingControlller::class, 'index'])->name('qoute-listing');
Route::post('store-listing',[ListingControlller::class, 'store'])->name('store-listing');
Route::get('show-listing',[ListingControlller::class, 'showlist'])->name('show-listing');
Route::get('list-profile/{id}',[ListingControlller::class, 'showListing'])->name('list-profile');
Route::post('delete-listing/{id}',[ListingControlller::class, 'removeFiles'])->name('delete-listing');
Route::get('qoute-listing2',[Listing2Controlller::class, 'index'])->name('qoute-listing2');
Route::post('store-listing2',[Listing2Controlller::class, 'store'])->name('store-listing2');
Route::get('show-listing2',[Listing2Controlller::class, 'showlist'])->name('show-listing2');
Route::get('list2-profile/{id}',[Listing2Controlller::class, 'showListing'])->name('list2-profile');
Route::post('delete-listing2/{id}',[Listing2Controlller::class, 'removeFiles'])->name('delete-listing2');