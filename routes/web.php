<?php

use App\Http\Controllers\DonationCasesController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PaymentCallbackController;
use App\Http\Controllers\PaymentSuccessController;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingController::class)->name('home');
Route::get('/donation-cases', DonationCasesController::class)->name('donation-cases');
Route::match(['GET', 'POST'], '/payments/paymob/callback', PaymentCallbackController::class)->name('payments.paymob.callback');
Route::get('/payments/{donation}/success', PaymentSuccessController::class)->name('payments.success');
