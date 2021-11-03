<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/thank-you', [App\Http\Controllers\HomeController::class, 'thankYou'])->name('thankYou');
Route::post('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/terms-of-services', [App\Http\Controllers\HomeController::class, 'termsOfServices'])->name('terms-of-services');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/refund-policy', [App\Http\Controllers\HomeController::class, 'refundPolicies'])->name('refund-policies');