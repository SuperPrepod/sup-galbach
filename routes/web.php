<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('index');
});

Route::get('/lol', function () {
    return view('lol_page');
});

Route::get('/pay', function () {
    return view('payment.form');
});

Route::get('/thankyou', function () {
    return view('payment.thankyou');
});

Route::get('/payment', [PaymentController::class, 'showForm'])->name('payment.form');
Route::post('/payment', [PaymentController::class, 'processPayment'])->name('payment.process');
Route::get('/thankyou', [PaymentController::class, 'thankyou'])->name('payment.thankyou');

Route::get('/student', function () {
    return view('student');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/index', function () {
    return view('index_vf');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/logout', [AuthenticationController::class, 'logout'])
    ->middleware(['auth', 'verified'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
