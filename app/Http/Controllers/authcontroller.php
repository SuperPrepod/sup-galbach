<?php

Route::get('/profile', function () {
    // Только для аутентифицированных пользователей
})->middleware('auth');