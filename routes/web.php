<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/test', function () {
    return view('test');

    
});

Route::get('/login', function () {
    return view('login');
    
});

Route::get('/coach', function () {
    return view('coach');
    
});

Route::get('/student', function () {
    return view('student');
    
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




// ---------


Route::get('/profile', [AuthenticationController::class, 'login']);
Route::post('/logout', [AuthenticationController::class, 'login']);
