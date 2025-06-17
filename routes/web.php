<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainerController;
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

Route::get('/cs2', function () {
    return view('cs2_page');
});

Route::get('/bh', function () {
    return view('bh_page');
});

Route::get('/thankyou', function () {
    return view('payment.thankyou');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/trainers', [TrainerController::class, 'index'])->name('trainers.index');

Route::get('/pay', [PaymentController::class, 'showForm'])->name('payment.form');
Route::post('/pay', [PaymentController::class, 'processPayment'])->name('payment.process');
Route::get('/thankyou', [PaymentController::class, 'thankyou'])->name('payment.thankyou');

// Route::get('/student', function () {
//     return view('student');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');
    Route::get('/index', function () {
    return view('index_vf');
})->name('dashboard');
});

require __DIR__.'/auth.php';
