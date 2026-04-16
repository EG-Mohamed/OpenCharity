<?php

use App\Http\Controllers\DonationCasesController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingController::class);
Route::get('/donation-cases', DonationCasesController::class)->name('donation-cases');
