<?php

// Route::get('/', function () {
//     return view('welcome');
// });

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::get('/', [BookingController::class, 'index']);       // Landing page
Route::post('/book', [BookingController::class, 'store']); // Form submission
